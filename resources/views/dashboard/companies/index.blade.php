@extends('dashboard.layout.master')
@section('title', 'Companies')

@section('content')
    <div class="text-left">
        <!-- زر إضافة شركة جديدة -->
        <a href="{{ route('companies.create') }}" class="btn btn-success">+ Add Company</a>
    </div>

    <div class="card mt-4">
        <div class="card-header">Companies List</div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Company Name</th>
                        <th>Image</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>
                           <img src="{{ asset($company->image) }}" style="width:40px; height: 40px;" alt="image"/>
                        </td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->phone }}</td>
                        <td>
                            <!-- عرض الشركة -->
                            <a href="{{ route('companies.show', $company->id) }}" title="View Company" style="color: #007bff;">
                                <i class="fas fa-eye"></i>
                            </a>

                            <!-- تعديل الشركة -->
                            <a href="{{ route('companies.edit', $company->id) }}" title="Edit Company" style="color: #ffc107; margin-left: 10px;">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- حذف الشركة -->
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="delete-form" style="display:inline-block; margin-left: 10px;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="delete-btn" style="background: none; border: none; color: red; cursor: pointer;" title="Delete Company">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- SweetAlert Script for Confirm Delete -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); 
                    const form = button.closest('form'); // Select the closest form for deletion

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Submit the form if confirmed
                        }
                    });
                });
            });
        });
    </script> 
@endsection
