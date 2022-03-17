<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            AllCategory
            <b style="float:right;">Total Category
            <span class="badge bg-danger">12</span></b>
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden  sm:rounded-lg">
            <div class="container">
            <div class="row">
                <div class="col-8">
                <div class="card">
            <div class="card-header">
                All Category
            </div>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                
            <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            </tr>
    
            </tbody>
            </table>
            </div>
                </div>
                <div class="col-4">
                    
                <div class="card">
  <div class="card-header">
    Add Category
  </div>
  <form>
  <div class="mb-3 p-3">
    <label for="exampleInputEmail1" class="form-label">Category</label>
    <input type="category_name" class="form-control" id="category_name" ><br>
    <button type="submit" class="btn btn-primary ">Add category</button>
  </div>
  
</form>
</div>
                </div>
            </div>
            </div>
     
            </div>
        </div>
    </div>
</x-app-layout>
