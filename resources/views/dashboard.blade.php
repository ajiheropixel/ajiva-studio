@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Dashboard</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">New Project</a>
</div>

<h3>Recent Projects</h3>
<div class="row">
    @forelse($projects as $project)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($project->description, 80) }}</p>
                    <span class="badge bg-{{ $project->status == 'active' ? 'success' : 'secondary' }}">{{ $project->status }}</span>
                </div>
                <div class="card-footer bg-transparent">
                    <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-outline-primary">View Project</a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-muted">No projects found. Create your first project.</p>
    @endforelse
</div>
@endsection
