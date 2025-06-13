{{-- Meng-extend layout utama dashboard Anda --}}
@extends('back.dashboard')

{{-- Memberikan judul untuk halaman --}}
@section('title', 'News Management')

{{-- Konten utama halaman --}}
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">News Management</h2>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Create News</a>
</div>

{{-- Menampilkan pesan sukses jika ada --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
    @forelse($news as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->title }}</td>
            <td>
                @if($item->status == 'published')
                    <span class="badge bg-success">Published</span>
                @elseif($item->status == 'draft')
                    <span class="badge bg-secondary">Draft</span>
                @else
                    <span class="badge bg-warning">Archived</span>
                @endif
            </td>
            <td>{{ $item->created_at->format('d M Y') }}</td>
            <td class="text-center">
                {{-- PERBAIKAN: Tambahkan parameter kedua yaitu ID berita ($item->news_id atau $item->id) --}}
                <a href="{{ route('admin.news.edit', $item->news_id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('admin.news.destroy', $item->news_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                    @csrf
                    @method('DELETE')
                    {{-- PERBAIKAN: Tombol hapus juga memerlukan ID berita --}}
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center">No news found.</td>
        </tr>
    @endforelse
</tbody>
            </table>
        </div>
    </div>
</div>
@endsection
