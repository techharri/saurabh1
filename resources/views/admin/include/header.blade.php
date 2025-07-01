<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/admin.css">
        {{-- <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/style.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/media.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/popup.css"> --}}
        <script src="https://cdn.tiny.cloud/1/m5b0zl74mjniso5bj85diaj8rcz8pui5a5ejns9foa5ec66j/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> 
        <script src="{{url('/')}}/javascript/ckeditor.js"></script> 
        
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3415971022487285"
     crossorigin="anonymous"></script>
    @stack('title')
</head>
<body>
    <div class="admin">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fa fa-bars" id="show"></i>
            <i class="fa-solid fa-xmark" id="hide"></i>
        </label>
       
    <div class="sidebar">
        {{-- <h2 style="text-transform:uppercase"><?php //echo $_SESSION['username']; ?></h2> --}}
        <h2 style="font-size: 24px; text-transform:uppercase">Saurabh</h2>
        <ul>
            <?php 
            //if ($role == 'Admin' || $role == 'Subscriber'|| $role == 'Editor') { 
            ?>
            <li><a href="{{url('/admin')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="{{url('/admin')}}/banner"><i class="fa-solid fa-angles-right"></i><span>Banner</span></a></li>
            <?php //} ?>
            <?php// if ($role == 'Admin') { ?>
            <li><a href="{{url('/admin')}}"><i class="fa-solid fa-angles-right"></i><span>Role</span></a></li>
            <li><a href="{{url('/admin')}}"><i class="fa-solid fa-angles-right"></i><span>Users</span></a></li>
            <?php// } ?>
             <?php 
           // if ($role == 'Admin' || $role == 'Subscriber'|| $role == 'Editor') { 
            ?>
            <li><a href="#" class="list"><i class="fa-solid fa-file-lines"></i><span>Book</span></a>
                <ul>
                    <li><a href="{{url('/admin')}}"><i class="fa-solid fa-angles-right"></i><span>Category</span></a>
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i><span>Books</span></a>
                </ul>
            </li>
            <li><a href="#" class="list"><i class="fa-solid fa-file-lines"></i><span>Content</span></a></li>
            <li><a href="{{url('/admin')}}/articlecat"><i class="fa-solid fa-angles-right"></i><span>Category</span></a></li>
            {{-- <li><a href="{{url('/admin/article')}}"><i class="fa-solid fa-angles-right"></i><span>Article</span></a></li> --}}
            <li><a href="{{route('admin.article_list')}}"><i class="fa-solid fa-angles-right"></i><span>Article</span></a></li>
            {{-- <li><a href="#" class="list"><i class="fa-solid fa-file-lines"></i><span>Content</span></a>
                <ul>
                    <li><a href="{{url('/admin')}}"><i class="fa-solid fa-angles-right"></i><span>Category</span></a></li>
                    <li><a href="{{url('/admin')}}"><i class="fa-solid fa-angles-right"></i><span>Article</span></a></li>
                </ul>
            </li>  --}}
            <?php //} ?>
             <?php 
            //if ($role == 'Admin' || $role == 'Subscriber') { 
            ?>
            <li><a href="{{route('admin.file')}}"><i class="fa-solid fa-link"></i><span>File Upload</span></a></li>
            <li><a href="{{url('/admin')}}/students"><i class="fa-solid fa-users"></i><span>Student</span></a></li>
            <li><a href="{{url('/admin')}}"><i class="fa-solid fa-photo-film"></i><span>Gallery</span></a></li>
            <li><a href="#"><i class="fa-solid fa-video"></i><span>Videos</span></a></li>
            <?php //} ?>
             <?php 
           // if ($role == 'Admin' || $role == 'Subscriber'|| $role == 'Editor') { 
            ?>
            <li><a href="#" class="list"><i class="fa-solid fa-question"></i><span>Quiz</span></a>
                <ul>
                    <li><a href="{{url('/admin')}}"><i class="fa-solid fa-angles-right"></i><span>Category</span></a></li>
                    <li><a href="{{url('/admin')}}"><i class="fa-solid fa-angles-right"></i><span>Quiz</span></a></li>
                </ul>
            </li>
            <li><a href="{{url('/admin')}}"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a></li>
            <?php //} ?>
        </ul>
    </div>
    <div class="work_area">
