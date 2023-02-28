<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Insert</title>
</head>
<body>
   <div class="w-1/4 mx-auto mt-20">
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <div class="">
            <label for="">Name</label><br>
            <input type="text" name="name" placeholder="name" class="px-4 py-2 border border-slate-500 rounded-md w-full">
        </div>
        <div class="">
            <label for="">Father Name</label><br>
            <input type="text" name="father_name" placeholder="father's name" class="px-4 py-2 border border-slate-500 rounded-md w-full">
        </div>
        <div class="">
            <label for="">Contact</label><br>
            <input type="text" name="contact" placeholder="contact" class="px-4 py-2 border border-slate-500 rounded-md w-full">
        </div>
        <div class="">
            <label for="">Email</label><br>
            <input type="text" name="email" placeholder="email" class="px-4 py-2 border border-slate-500 rounded-md w-full">
        </div>
        <div class="">
            <label for="">City</label><br>
            <input type="text" name="city" placeholder="city" class="px-4 py-2 border border-slate-500 rounded-md w-full">
        </div>
       <div class="">
        <label for="">Pin Code</label><br>
        <input type="text" name="pincode" placeholder="pincode" class="px-4 py-2 border border-slate-500 rounded-md w-full">
       </div>
        <button type="submit" class="px-4 py-2 bg-green-400 text-white hover:bg-green-600 rounded mt-4 w-full">submit</button>
    </form>
   </div>
</body>
</html>