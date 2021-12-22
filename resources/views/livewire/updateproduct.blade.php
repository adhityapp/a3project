@extends('layouts.app')
@section('title', 'Update Product')
@section('content')
<div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="font-weight-bold mb-3 text-center">Update Product</h2>
                    <form action="{{route('putproducts', ['id' => $products->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Product Name</label>
                            <input wire:model="name" type="text" class="form-control" value="{{ $products->name }}">
                            {{-- @error('name') <small class="text-danger">{{$message}}</small>@enderror --}}
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input wire:model="description" type="text" class="form-control" value="{{ $products->description }}">
                            {{-- @error('description') <small class="text-danger">{{$message}}</small>@enderror --}}
                        </div>
                        {{-- <div class="form-group">
                            <label>Product Image</label>
                            <div class="custom-file">
                                <input wire:model="image" type="file" class="custom-file-input" id="customFile">
                                <label for="customFile" class='custom-file-label'>Choose Image</label>
                                @error('image') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            @if($image)
                            <label class="mt-2">Image Preview:</label>
                            <img src="{{$image->temporaryUrl()}}" class="img-fluid" alt="Preview Image">
                            @endif                            
                        </div> --}}
                        <div class="form-group">
                            <label>Qty</label>
                            <input wire:model="qty" type="number" class="form-control" value="{{ $products->qty }}">
                            {{-- @error('qty') <small class="text-danger">{{$message}}</small>@enderror --}}
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input wire:model="price" type="number" class="form-control" value="{{ $products->price }}">
                            {{-- @error('price') <small class="text-danger">{{$message}}</small>@enderror --}}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update Product</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    