@extends('back.dashboard')

@section('title', 'Edit News')

@section('content')
<h2 class="mb-4">Edit News</h2>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" required>{{ old('content', $news->content) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (Leave blank to keep current image)</label>
                <input type="file" class="form-control" id="image" name="image" onchange="previewImage()">
                @if($news->image)
                    <img id="image-preview" src="{{ asset('storage/' . $news->image) }}" alt="Current Image" class="img-thumbnail mt-2" width="200">
                @else
                    <img id="image-preview" src="#" alt="Image Preview" class="img-thumbnail mt-2" style="display:none;" width="200"/>
                @endif
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="draft" {{ old('status', $news->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $news->status) == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
            <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update News</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('#image-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endpush
