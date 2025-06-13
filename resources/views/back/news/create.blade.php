@extends('back.dashboard')

@section('title', 'Create News')

@section('content')
<h2 class="mb-4">Create New News</h2>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            {{-- TAMBAHKAN BAGIAN INI UNTUK MEMILIH KATEGORI --}}
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id" id="category_id" required>
                    <option value="" disabled selected>-- Choose Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- --------------------------------------------- --}}

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (Optional)</label>
                <input type="file" class="form-control" id="image" name="image" onchange="previewImage()">
                <img id="image-preview" src="#" alt="Image Preview" class="img-thumbnail mt-2" style="display:none;" width="200"/>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="draft" selected>Draft</option>
                    <option value="published">Published</option>
                    <option value="archived">Archived</option>
                </select>
            </div>
            <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save News</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
{{-- Script preview image tidak berubah --}}
@endpush
