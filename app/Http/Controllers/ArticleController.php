<?php

namespace App\Http\Controllers;
use App\Models\articles\articlecat;
use App\Models\articles\article;
use App\Models\createlink;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class ArticleController extends Controller
{

    // Article Category
    public function ArticleCatCreate(){
        return view('admin.article_cat_create');
    }
    // public function ArticleCatCreate(){
    //     return view('admin.articlecatcreate');
    // }
    public function ArticleCatList(){
        // $articlecat=articlecat::all();
        $articlecat = ArticleCat::with('parentCategory')->get();
        $data=compact('articlecat');
        return view('admin.article_cat_list')->with($data);
    }
    public function ArticleCatEdit($id){

        return view('admin.article_cat_edit')->with($data);
    }
    public function ArticleCatDel($id){
       $articlecat= articlecat::find($id)->delete();
        // return view('admin.articlecatlist')->with($data);
        return redirect()->back();
    }


    // Article

    public function ArticleCreate(){
        $articlecat = articlecat::all();

        // Pass the categories to the view
        return view('admin.article_create', compact('articlecat'));
    }
    public function ArticleStore(Request $request)
{
    // Validate the request input
    $request->validate([
        'ar_name' => 'required|string|max:255',
        'ar_url' => 'required|string|max:255|unique:article,ar_url',
        'ac_id' => 'required|integer',
        'long_desc' => 'nullable|string',
        'meta_title' => 'nullable|string|max:255',
        'keyword' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|boolean', // Assuming status is a boolean
    ]);

    // Create a new article instance
    $article = new article;
    $article->ar_name = $request->input('ar_name');
    $article->ar_url = $request->input('ar_url');
    $article->ac_id = $request->input('ac_id');
    $article->long_desc = $request->input('long_desc');
    $article->meta_title = $request->input('meta_title');
    $article->keyword = $request->input('keyword');
    $article->description = $request->input('description');
    $article->status = $request->input('status');

    // Save the article to the database
    $article->save();

    // Redirect to article list with success message
    return redirect()->route('admin.article_list')->with('success', 'Article created successfully');
}


    public function ArticleEdit($id){
    // Fetch the article by ID
    $article = article::find($id);
    
    // Check if the article exists
    if (!$article) {
        return redirect()->route('admin.article_list')->with('error', 'Article not found');
    }
    
    // Pass the article data to the view
    return view('admin.article_edit', compact('article'));
    }

    public function ArticleUpdate(Request $request, $id)
{
    // Find the article by ID
    $article = article::find($id);

    // Check if the article exists
    if (!$article) {
        return redirect()->route('admin.article_list')->with('error', 'Article not found');
    }

    // Validate the input
    $request->validate([
        'ar_name' => 'required|string|max:255',
        'ar_url' => 'required|string|max:255',
        'ac_id' => 'required|integer',
        'long_desc' => 'nullable|string',
        'meta_title' => 'nullable|string|max:255',
        'keyword' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|boolean',
        'created_at' => 'nullable|date',
    ]);

    // Update article attributes
    $article->ar_name = $request->input('ar_name');
    $article->ar_url = $request->input('ar_url');
    $article->ac_id = $request->input('ac_id');
    $article->long_desc = $request->input('long_desc');
    $article->meta_title = $request->input('meta_title');
    $article->keyword = $request->input('keyword');
    $article->description = $request->input('description');
    $article->status = $request->input('status');

    // Update created_at if provided
    if ($request->has('created_at')) {
        $article->created_at = $request->input('created_at');
    }

    // Save the changes
    $article->save();

    // Redirect to article list with success message
    return redirect()->route('admin.article_list')->with('success', 'Article updated successfully');
}
    

    

    public function ArticleList(Request $request){
        // $articlelist = article::with('category')->get();
        // $articlelist = Article::paginate(15);
        // $data=compact('articlelist');
        // return view('admin.article_list')->with($data);
        $query = Article::query();

        if ($request->filled('ar_name')) {
            $query->where('ar_name', 'like', '%' . $request->ar_name . '%');
        }
    // Sorting logic
    if ($request->filled('sort') && in_array($request->sort, ['a_id', 'ar_name', 'ac_id', 'created_at', 'status'])) {
        $direction = $request->direction == 'desc' ? 'desc' : 'asc';
        $query->orderBy($request->sort, $direction);
    } else {
        // Default sort
        $query->orderBy('a_id', 'asc');
    }

    
    // Other filters (if needed)

    $articlelist = $query->paginate(15); // Adjust pagination as needed
    return view('admin.article_list', compact('articlelist'));
    }

    public function ArticleDel($id)
{
    // Find the article by its ID
    $article = article::find($id);
    // Check if the article exists before deleting
    if ($article) {
        $article->delete();
        // Optionally add a success message
        session()->flash('success', 'Article deleted successfully.');
    } else {
        // Optionally add an error message if the article was not found
        session()->flash('error', 'Article not found.');
    }

    // Redirect back to the previous page
    return redirect()->back();
}

public function FileLink(){
    $createlinks = createlink::all(); // Assuming FileLink is your model

    // Pass the data to the view
    return view('admin.file', compact('createlinks'));
}

public function store(Request $request)
{
    // Validate the request input
    $request->validate([
        'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:3070', // Only allow image files
    ]);

    // Handle the uploaded file
    $file = $request->file('file');
    $fileName = rand(11111, 99999) . '_' . $file->getClientOriginalName(); // Generate a unique file name
    $path = $file->storeAs('public/images', $fileName); // Store the file

    // Create a new Createlink instance
    $createlink = new createlink;
    $createlink->file = $fileName; // Store the file name in the database
    // $createlink->created_at = now(); // Set current timestamp or adjust as needed

    // Save the file details to the database
    $createlink->save();

    // Generate the URL for the stored file
    $imageUrl = Storage::url($path);

    // Redirect with success message
    return redirect()->back()->with('success', 'Image uploaded successfully! Image URL: ' . $imageUrl);
}

public function imageUpload(Request $request)
{
        // Validate the file
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Max 2MB image size
        ]);

        // Store the file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = rand(11111, 99999) . '_' . $file->getClientOriginalName();
            // $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/images', $fileName);

            // Get the URL of the stored image
            $url = Storage::url($path);

            // Return the location for TinyMCE to use
            return response()->json(['location' => url($url)]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }

    public function articleCategory()
{
    $articlecat = ArticleCat::with('category')->get();
    $data=compact('articlecat');
    return view('pages.article.category', $data);
}
    public function CategoryView()
{
    $articlecat = ArticleCat::with('category')->get();
    $data=compact('articlecat');
    return view('pages.article.category', $data);
}



    // public function article($name){ 
    //     // Assuming $name corresponds to the category ID
    //     $ac_id = $name;
    
    //     // Search for articles by ac_id and retrieve ar_name and ac_id
    //     $articlename = Article::select('ar_name', 'ac_id')
    //                             ->where('ac_id', $ac_id)  // Search by ac_id
    //                             ->get();  // Use get() to retrieve all articles under that category
    
    //     // If no articles are found, handle it accordingly
    //     if ($articlename->isEmpty()) {
    //         abort(404, 'No articles found for this category'); // Optionally return a 404 error
    //     }
    
    //     $data = compact('articlename', 'ac_id'); 
        
    //     // Return the 'article' view
    //     return view("pages.article.article", $data);
    // }
    
    // public function article($name){ 
    //     $url = url('/article') . '/' . $name;
    //     $articlename = Article::select('ar_name', 'ac_id')->get(); // Get article names
    //     $data = compact('articlename', 'url'); 
    
    //     // Always return the 'category' view
    //     return view("pages.article.article", $data);
    // }
    // public function article($name){ 
    //     $url=url('/article').'/'.$name;
    //     $articlename = Article::select('ar_name')->get(); // Adjusted to get the article names
    //     $data = compact('articlename', 'url'); 
        
    //     // Dynamically load the view using the $name parameter
    //     return view("pages.article.{$name}", $data);
    // }

}
