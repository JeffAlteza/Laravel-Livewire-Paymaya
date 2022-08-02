

<div>
@include('livewire.add-student')
@include('livewire.update')
@include('livewire.payment')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- center card title -->
                        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif 
                        <h3 class="card-title text-center">STUDENT DATA</h3>
                        
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#addStudentModals">
                            <i class="fa-solid fa-plus"></i> Add Student
                            </button>
                            </div>
                            <div class="col-md-3 ">
                            <input type="text" placeholder="Search" class="form-control " wire:model="search">
                            </div>
                        </div>
                    <table id="student_table" class="table " >
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $student)
        @include('livewire.update')
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#updateStudentModals" wire:click.prevent="edit_student({{$student->id}})"> <i class="fa-solid fa-pen"></i></button>
                <button type="button" class="btn btn-danger" wire:click="delete_student({{ $student->id }})"> <i class="fa-solid fa-trash"></i></button>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal"  data-bs-target="#PaymentModal" wire:click.prevent="proceed_payment({{$student->id}})" > <i style="color: white;" class="fa-solid fa-credit-card"></i> </button>
                
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
                    
    </div>
            <div class="mt-3">
             {{$data->links()}}
            </div>
    </div>
    </div>
    </div>
    
</section>

</div>


