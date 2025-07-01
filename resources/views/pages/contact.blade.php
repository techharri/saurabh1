@extends('layout.main')
@push('title')
    <title>Contact</title>
@endpush
@section('main-section')
<style>
    input{
        width: 100%;
        padding: 0.2em;
        font-size: 16px;
        margin-top: 0.5em;
    }
    </style>
    <h3>Contact</h3>
    <div class="contact">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13997.492927450077!2d77.20058718658771!3d28.708389930122976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfde0e290d615%3A0xc0f61a2e75ac95a!2sMukherjee%20Nagar%2C%20Delhi!5e0!3m2!1sen!2sin!4v1704196977906!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-detail">
            
            <form action="{{url('/')}}/contact" method="post">
                @csrf
                <x-input type="text" name="student" label="Name"/>
                <x-input type="email" name="email" label="Email"/>
                <x-input type="tel" name="contact" label="Contact"/><br>
                <textarea rows="10" placeholder="message..." style="resize:none; width:100%; padding:0.2em;" name="msg"></textarea><br>
                @error('msg')
                <span style="color:red;">{{ $message }}</span>
                @enderror<br>
                <button>Submit</button>
            </form>
        </div>
    </div>
    <div class="contact-info">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, blanditiis commodi, eligendi adipisci, corporis autem tempore quia praesentium voluptate doloribus distinctio ab mollitia sed. Ad nam eos cumque illum explicabo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, blanditiis commodi, eligendi adipisci, corporis autem tempore quia praesentium voluptate doloribus distinctio ab mollitia sed. Ad nam eos cumque illum explicabo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, blanditiis commodi, eligendi adipisci, corporis autem tempore quia praesentium voluptate doloribus distinctio ab mollitia sed. Ad nam eos cumque illum explicabo.</p>
    </div>
@endsection