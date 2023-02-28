<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="">
        <form action="{{route('student.index')}}" role="search">
            <input type="search" name="search" placeholder="Search Here" class="px-4 py-2 bg-gray-200 bg-opacity-25 rounded-md border border-slate-700">
            <button type="submit" class="bg-green-500 rounded-md px-4 py-2">Search</button>
    
        </form>
    </div>

    <div class="w-1/2 mx-auto mt-10 border border-slate-50">
        <h2 class="float-right text-2xl ">Total Student {{$StudentCount}}</h2>
            <a href="{{ route('student.create') }}"
            class="px-4 py-2 bg-purple-500 hover:bg-purple-700 text-white uppercase rounded-md mb-10">insert</a>
        <table class="border border-collapse mt-2">
            <thead>
                <tr>
                    <th class="border border-slate-300">id</th>
                    <th class="border border-slate-300">name</th>
                    <th class="border border-slate-300">father_name</th>
                    <th class="border border-slate-300">email</th>
                    <th class="border border-slate-300">contact</th>
                    <th class="border border-slate-300">city</th>
                    <th class="border border-slate-300">pincode</th>
                    <th colspan="3" class="border border-slate-300">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $item)
                    <tr>
                        <td class="border border-slate-300">{{ $item->id }}</td>
                        <td class="border border-slate-300">{{ $item->name }}</td>
                        <td class="border border-slate-300">{{ $item->father_name }}</td>
                        <td class="border border-slate-300">{{ $item->email }}</td>
                        <td class="border border-slate-300">{{ $item->contact }}</td>
                        <td class="border border-slate-300">{{ $item->city }}</td>
                        <td class="border border-slate-300">{{ $item->pincode }}</td>
                        <td class="border border-slate-300"><a href=""
                                class=" px-2 py-1 bg-yellow-400 text-white hover:bg-yellow-600 rounded">Edit</a></td>

                        <td class="border border-slate-300">
                            <form action="{{ route('student.destroy', $item) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"
                                    class=" px-2 py-1 bg-red-400 text-white hover:bg-red-600 rounded" />
                            </form>
                        </td>
                        <td class="border border-slate-300"><a href=""
                                class=" px-2 py-1 bg-fuchsia-400 text-white hover:bg-fuchsia-600 rounded">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex flex-col">
            {!!$students->links()!!}
        </div>
    </div>

</body>

</html>
