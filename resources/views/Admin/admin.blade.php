<x-app-layout>

    <div class="min-h-screen bg-gray-100  m-10">
        <h1 class="text-3xl text-center  m-7">Admin Dashboard</h1>

        

        <form action="{{url('/addoctor')}}" method="POST" class="m-10">
            @csrf

            <div >
                <label>الاسم</label>
                <input type="text" name="name" class="block mt-1 w-full" required ="">
            </div>
    
            <div class="mt-4">
                <label>البريد الالكتروني</label>
                <input type="email" name="email" class="block mt-1 w-full" required ="">
            </div>

            <div class="mt-4">
                <label>اسم المستخدم </label>
                <input type="text" name="username" class="block mt-1 w-full" required ="">
            </div>

    
            <div class="mt-4">
                <label>الرمز السّري</label>
                <input type="password" name="password" class="block mt-1 w-full" required ="">
            </div>
    
            <div class="flex items-center justify-end mt-4">
               <input type="submit" value="اضافة" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            </div>
        </form>
    
    </div>

    
    
</x-app-layout>