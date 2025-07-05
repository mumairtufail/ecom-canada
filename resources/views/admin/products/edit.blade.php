@extends('admin.layout.app')
@section('title', 'Edit Product')

@section('content')
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        --primary-color: #FC5F49;
        --primary-light: #FD7A67;
        --primary-lighter: #FE9585;
        --primary-lightest: #FFF0EE;
        --primary-dark: #E04732;
        --background: #F8F9FA;
        --white: #FFFFFF;
        --text-dark: #2D3748;
        --text-medium: #4A5568;
        --text-light: #718096;
        --border-light: #E2E8F0;
        --success: #48BB78;
        --warning: #ED8936;
        --danger: #F56565;
        --info: #4299E1;
    }

    .edit-container {
        background-color: var(--background);
        min-height: 100vh;
        padding: 2rem 0;
    }

    .page-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        color: var(--white);
        padding: 2rem;
        border-radius: 16px;
        margin-bottom: 2rem;
    }

    .page-title {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .page-subtitle {
        opacity: 0.85;
        font-size: 1rem;
        margin: 0;
    }

    .breadcrumb-custom {
        background: var(--white);
        padding: 1rem 1.5rem;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        border: 1px solid var(--border-light);
    }

    .breadcrumb-custom .breadcrumb-item a {
        color: var(--primary-color);
        text-decoration: none;
    }

    .breadcrumb-custom .breadcrumb-item.active {
        color: var(--text-medium);
    }

    .form-container {
        background: var(--white);
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 1px 3px rgba(252, 95, 73, 0.08);
    }

    .form-label {
        font-weight: 600;
        color: var(--text-medium);
        margin-bottom: 0.5rem;
    }

    .form-control {
        border: 1px solid var(--border-light);
        border-radius: 8px;
        padding: 0.75rem;
        transition: border-color 0.2s ease;
        font-size: 0.9rem;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(252, 95, 73, 0.1);
    }

    .form-control.is-invalid {
        border-color: var(--danger);
    }

    .invalid-feedback {
        color: var(--danger);
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .btn-warning-custom {
        background: var(--primary-color);
        border: 1px solid var(--primary-color);
        color: var(--white);
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-weight: 500;
        transition: all 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }

    .btn-warning-custom:hover {
        background: var(--primary-dark);
        border-color: var(--primary-dark);
        color: var(--white);
        transform: translateY(-1px);
        text-decoration: none;
    }

    .btn-secondary-custom {
        background: var(--background);
        border: 1px solid var(--border-light);
        color: var(--text-medium);
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-weight: 500;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-secondary-custom:hover {
        background: var(--border-light);
        color: var(--text-dark);
        text-decoration: none;
    }

    .current-image-container {
        position: relative;
        display: inline-block;
        margin-bottom: 1rem;
    }

    .current-image {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 12px;
        border: 1px solid var(--border-light);
    }

    .change-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.2s ease;
        cursor: pointer;
        color: white;
    }

    .current-image-container:hover .change-image-overlay {
        opacity: 1;
    }

    .image-upload-area {
        border: 2px dashed var(--border-light);
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        transition: all 0.2s ease;
        background: var(--background);
        cursor: pointer;
        position: relative;
    }

    .image-upload-area:hover {
        border-color: var(--primary-color);
        background: rgba(252, 95, 73, 0.05);
    }

    .image-upload-area.dragover {
        border-color: var(--primary-color);
        background: rgba(252, 95, 73, 0.05);
    }

    .upload-icon {
        font-size: 3rem;
        color: var(--text-light);
        margin-bottom: 1rem;
    }

    .upload-text {
        color: var(--text-medium);
        margin-bottom: 0.5rem;
    }

    .upload-hint {
        color: var(--text-light);
        font-size: 0.875rem;
    }

    .new-image-preview {
        max-width: 200px;
        max-height: 200px;
        border-radius: 8px;
        border: 1px solid var(--border-light);
        margin: 1rem auto;
        display: none;
    }

    .alert-custom {
        border: none;
        border-radius: 12px;
        padding: 1rem 1.5rem;
        margin-bottom: 1.5rem;
    }

    .alert-danger {
        background: rgba(245, 101, 101, 0.1);
        color: var(--danger);
        border-left: 4px solid var(--danger);
    }

    .form-actions {
        background: var(--background);
        margin: 2rem -2rem -2rem;
        padding: 1.5rem 2rem;
        border-radius: 0 0 16px 16px;
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
    }

    .product-info {
        background: var(--primary-lightest);
        padding: 1rem 1.5rem;
        border-radius: 12px;
        margin-bottom: 2rem;
        border-left: 4px solid var(--primary-color);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .edit-container {
            padding: 1rem 0;
        }
        
        .page-header {
            padding: 1.5rem;
            text-align: center;
        }
        
        .page-title {
            font-size: 1.5rem;
            justify-content: center;
        }
        
        .form-container {
            padding: 1.5rem;
        }

        .form-actions {
            margin: 2rem -1.5rem -1.5rem;
            padding: 1rem 1.5rem;
            flex-direction: column;
        }

        .current-image {
            width: 150px;
            height: 150px;
        }
    }
</style>

<div class="edit-container">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="page-title">
                        <i class="fas fa-edit"></i>
                        Edit Product
                    </h1>
                    <p class="page-subtitle">Update product information and details</p>
                </div>
            </div>
        </div>

        <!-- Product Info -->
        <div class="product-info">
            <h6><i class="fas fa-info-circle"></i> Editing Product</h6>
            <p class="mb-0">
                <strong>{{ $product->name }}</strong> (ID: #{{ $product->id }}) | 
                Created: {{ $product->created_at}} | 
                Last Updated: {{ $product->updated_at}}
            </p>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="alert alert-danger alert-custom">
                <h6><i class="fas fa-exclamation-triangle"></i> Please fix the following errors:</h6>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Form -->
        <div class="form-container">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="editProductForm">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <!-- Product Name -->
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               id="name" 
                               name="name" 
                               value="{{ old('name', $product->name) }}" 
                               required 
                               placeholder="Enter product name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div class="col-md-6 mb-3">
                        <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                        <select class="form-control @error('category_id') is-invalid @enderror" 
                                id="category_id" 
                                name="category_id" 
                                required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" 
                                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" 
                              name="description" 
                              rows="4" 
                              required 
                              placeholder="Enter product description">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <!-- Price -->
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price (PKR) <span class="text-danger">*</span></label>
                        <input type="number" 
                               class="form-control @error('price') is-invalid @enderror" 
                               id="price" 
                               name="price" 
                               step="0.01" 
                               min="0" 
                               value="{{ old('price', $product->price) }}" 
                               required 
                               placeholder="0.00">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Stock -->
                    <div class="col-md-6 mb-3">
                        <label for="stock" class="form-label">Stock Quantity <span class="text-danger">*</span></label>
                        <input type="number" 
                               class="form-control @error('stock') is-invalid @enderror" 
                               id="stock" 
                               name="stock" 
                               min="0" 
                               value="{{ old('stock', $product->stock) }}" 
                               required 
                               placeholder="0">
                        @error('stock')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Product Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    
                    @if($product->image)
                        <!-- Current Image -->
                        <div class="current-image-container" id="currentImageContainer">
                            <img src="{{ asset('storage/' . $product->image) }}" 
                                 alt="Current product image" 
                                 class="current-image">
                            <div class="change-image-overlay" onclick="document.getElementById('image').click()">
                                <div>
                                    <i class="fas fa-camera fa-2x mb-2"></i>
                                    <div>Change Image</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-muted mb-3">
                            <small>Click on the image above to change it, or upload a new image below.</small>
                        </div>
                    @endif

                    <!-- Upload Area -->
                    <div class="image-upload-area" id="uploadArea" onclick="document.getElementById('image').click()">
                        <div class="upload-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div class="upload-text">
                            {{ $product->image ? 'Upload New Image' : 'Click to upload or drag and drop' }}
                        </div>
                        <div class="upload-hint">PNG, JPG, JPEG up to 2MB</div>
                        <input type="file" 
                               class="form-control @error('image') is-invalid @enderror" 
                               id="image" 
                               name="image" 
                               accept="image/*" 
                               style="display: none;">
                    </div>
                    
                    <!-- New Image Preview -->
                    <img id="newImagePreview" class="new-image-preview" alt="New image preview">
                    
                    @error('image')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" 
                               type="checkbox" 
                               id="status" 
                               name="status" 
                               value="1"
                               {{ old('status', $product->status) ? 'checked' : '' }}>
                        <label class="form-check-label" for="status">
                            Active Status
                        </label>
                    </div>
                    <small class="text-muted">Toggle to activate/deactivate the product</small>
                    @error('status')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Product Flag -->
                <div class="mb-3">
                    <label for="flag" class="form-label">Product Flag</label>
                    <select class="form-control @error('flag') is-invalid @enderror" 
                            id="flag" 
                            name="flag">
                        <option value="All Items" {{ old('flag', $product->flag) == 'All Items' ? 'selected' : '' }}>All Items</option>
                        <option value="New Arrivals" {{ old('flag', $product->flag) == 'New Arrivals' ? 'selected' : '' }}>New Arrivals</option>
                        <option value="Featured" {{ old('flag', $product->flag) == 'Featured' ? 'selected' : '' }}>Featured</option>
                        <option value="On Sale" {{ old('flag', $product->flag) == 'On Sale' ? 'selected' : '' }}>On Sale</option>
                    </select>
                    <small class="text-muted">Choose how this product should be categorized on the site</small>
                    @error('flag')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="{{ route('admin.products.index') }}" class="btn-secondary-custom">
                        <i class="fas fa-times"></i>
                        Cancel
                    </a>
                    {{-- <a href="{{ route('admin.products.show', $product->id) }}" class="btn-secondary-custom">
                        <i class="fas fa-eye"></i>
                        View Product
                    </a> --}}
                    <button type="submit" class="btn-warning-custom" id="submitBtn">
                        <span id="submitText">
                            <i class="fas fa-save"></i>
                            Update Product
                        </span>
                        <span id="submitSpinner" style="display: none;">
                            <i class="fas fa-spinner fa-spin"></i>
                            Updating...
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('image');
    const newImagePreview = document.getElementById('newImagePreview');
    const uploadArea = document.getElementById('uploadArea');
    const currentImageContainer = document.getElementById('currentImageContainer');
    const form = document.getElementById('editProductForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const submitSpinner = document.getElementById('submitSpinner');

    // Image preview functionality
    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                newImagePreview.src = e.target.result;
                newImagePreview.style.display = 'block';
                uploadArea.style.display = 'none';
                
                // Hide current image if it exists
                if (currentImageContainer) {
                    currentImageContainer.style.opacity = '0.5';
                }
            };
            reader.readAsDataURL(file);
        }
    });

    // Drag and drop functionality
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            imageInput.files = files;
            imageInput.dispatchEvent(new Event('change'));
        }
    });

    // Form submission handling
    form.addEventListener('submit', function(e) {
        submitBtn.disabled = true;
        submitText.style.display = 'none';
        submitSpinner.style.display = 'inline';
    });

    // Reset image preview if clicked again
    newImagePreview.addEventListener('click', function() {
        imageInput.value = '';
        newImagePreview.style.display = 'none';
        uploadArea.style.display = 'block';
        
        // Restore current image opacity
        if (currentImageContainer) {
            currentImageContainer.style.opacity = '1';
        }
    });
});
</script>

@endsection