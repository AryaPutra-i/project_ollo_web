@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #f1edff 0%, #f7f5ff 100%);
        font-family: 'poppins', 'Instrument Sans', system-ui, -apple-system, sans-serif;
        position: relative;
        overflow-x: hidden;
    }

    .booking-container {
        min-height: calc(100vh - 72px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 24px;
        position: relative;
        z-index: 1;
    }

    .booking-card {
        width: 100%;
        max-width: 680px;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        border-radius: 28px;
        box-shadow: 
            0 30px 80px rgba(61, 38, 150, 0.25),
            0 10px 30px rgba(0, 0, 0, 0.12),
            inset 0 1px 0 rgba(255, 255, 255, 0.8);
        padding: 56px 48px;
        border: 1px solid rgba(255, 255, 255, 0.5);
        animation: slideUp 0.6s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .card-title {
        color: #6b46c1;
        font-weight: 800;
        font-size: 38px;
        letter-spacing: -1px;
        margin-bottom: 8px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .card-subtitle {
        color: #718096;
        font-size: 15px;
        font-weight: 500;
    }


    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-row.full {
        grid-template-columns: 1fr;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .form-group label {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 14px;
        font-weight: 700;
        color: #5b21b6;
        margin-bottom: 10px;
        transition: color 0.2s ease;
    }

    .form-group label::before {
        content: '●';
        font-size: 8px;
        color: #a78bfa;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        background: #ffffff;
        border: 2px solid #e9d5ff;
        border-radius: 14px;
        padding: 14px 18px;
        font-size: 15px;
        color: #2d3748;
        font-family: 'poppins', sans-serif;
        outline: none;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(139, 92, 246, 0.08);
    }

    .form-group input:hover,
    .form-group textarea:hover,
    .form-group select:hover {
        border-color: #c4b5fd;
        box-shadow: 0 4px 12px rgba(139, 92, 246, 0.12);
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        border-color: #8b5cf6;
        box-shadow: 
            0 0 0 4px rgba(139, 92, 246, 0.15),
            0 4px 16px rgba(139, 92, 246, 0.2);
        transform: translateY(-1px);
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #a0aec0;
    }

    .form-group textarea {
        min-height: 130px;
        resize: vertical;
        line-height: 1.6;
    }


    .upload-area {
        border: 3px dashed #ddd6fe;
        border-radius: 16px;
        padding: 40px 28px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 14px;
        color: #8b5cf6;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #faf5ff 0%, #f5f3ff 100%);
        position: relative;
        overflow: hidden;
    }

    .upload-area::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.05) 0%, rgba(168, 85, 247, 0.08) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .upload-area:hover {
        border-color: #a78bfa;
        background: linear-gradient(135deg, #f5f3ff 0%, #ede9fe 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(139, 92, 246, 0.15);
    }

    .upload-area:hover::before {
        opacity: 1;
    }

    .upload-area svg {
        width: 56px;
        height: 56px;
        position: relative;
        z-index: 1;
        filter: drop-shadow(0 4px 8px rgba(139, 92, 246, 0.2));
    }

    .upload-area-text {
        font-weight: 700;
        font-size: 16px;
        position: relative;
        z-index: 1;
    }

    .upload-area-hint {
        font-size: 13px;
        color: #9f7aea;
        font-weight: 500;
        position: relative;
        z-index: 1;
    }


    .button-group {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 16px;
        margin-top: 36px;
    }

    .btn {
        border: none;
        border-radius: 14px;
        padding: 16px 24px;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .btn:hover::before {
        opacity: 1;
    }

    .btn-secondary {
        background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
        color: #4a5568;
        box-shadow: 
            0 4px 12px rgba(74, 85, 104, 0.1),
            inset 0 1px 0 rgba(255, 255, 255, 0.8);
        border: 1px solid #e2e8f0;
    }

    .btn-secondary:hover {
        background: linear-gradient(135deg, #edf2f7 0%, #e2e8f0 100%);
        transform: translateY(-2px);
        box-shadow: 
            0 8px 20px rgba(74, 85, 104, 0.15),
            inset 0 1px 0 rgba(255, 255, 255, 0.8);
    }

    .btn-primary {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 50%, #6d28d9 100%);
        color: #ffffff;
        box-shadow: 
            0 8px 24px rgba(139, 92, 246, 0.35),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 17px;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 50%, #5b21b6 100%);
        transform: translateY(-3px);
        box-shadow: 
            0 12px 32px rgba(139, 92, 246, 0.45),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }

    .btn:active {
        transform: translateY(0);
    }


    @media (max-width: 768px) {
        .booking-card {
            padding: 40px 32px;
        }

        .card-title {
            font-size: 30px;
            margin-bottom: 6px;
        }

        .card-subtitle {
            font-size: 14px;
        }

        .form-row {
            gap: 18px;
            margin-bottom: 18px;
        }

        .button-group {
            gap: 14px;
            margin-top: 28px;
        }
    }

    @media (max-width: 480px) {
        .booking-container {
            padding: 32px 16px;
        }

        .booking-card {
            padding: 32px 24px;
            border-radius: 24px;
        }

        .card-title {
            font-size: 26px;
        }

        .card-subtitle {
            font-size: 13px;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 14px;
            margin-bottom: 14px;
        }

        .button-group {
            grid-template-columns: 1fr;
            gap: 12px;
            margin-top: 24px;
        }

        .upload-area {
            padding: 32px 20px;
        }
    }
</style>

<div class="booking-container">
    <div class="booking-card">
        <div class="card-header">
            <h1 class="card-title">Create Order</h1>
            <p class="card-subtitle">Isi form di bawah untuk membuat pesanan baru</p>
        </div>


        <form action="{{ route('orders.show') }}" method="GET" autocomplete="off">
            <div class="form-row">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input id="full_name" name="full_name" type="text" placeholder="Budi Santoso" required>
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input id="phone_number" name="phone_number" type="tel" placeholder="08123456789" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" name="email" type="email" placeholder="Ollo@gmail.com" required>
                </div>

                <div class="form-group">
                    <label for="title">Project Title</label>
                    <input id="title" name="title" type="text" placeholder="Desain Poster" required>
                </div>
            </div>

            <div class="form-row full">
                <div class="form-group">
                    <label for="description">Project Description</label>
                    <textarea id="description" name="description" placeholder="Jelaskan detail kebutuhan project Anda..." required></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input id="deadline" name="deadline" type="date" required>
                </div>

                <div class="form-group">
                    <label for="budget">Budget (Rp)</label>
                    <input id="budget" name="budget" type="number" min="0" step="10000" placeholder="1000000" required>
                </div>
            </div>

            <div class="form-row full">
                <div class="form-group">
                    <label for="reference">Referensi (Opsional)</label>
                    <input type="file" id="reference" name="reference" accept="image/*,.pdf,.doc,.docx" style="display: none;">
                    <div class="upload-area" role="button" aria-label="Upload referensi" onclick="document.getElementById('reference').click()">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M32 8v28" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
                            <path d="M20 22l12-12 12 12" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            <rect x="14" y="36" width="36" height="16" rx="4" stroke="currentColor" stroke-width="4" />
                        </svg>
                        <div class="upload-area-text" id="upload-text">Upload File</div>
                        <div class="upload-area-hint">PDF, DOC, atau Gambar (Max 5MB)</div>
                    </div>
                    <div id="image-preview" style="display: none; margin-top: 16px; text-align: center;">
                        <img id="preview-img" src="" alt="Preview" style="max-width: 100%; max-height: 300px; border-radius: 12px; box-shadow: 0 8px 20px rgba(139, 92, 246, 0.2);">
                        <div style="margin-top: 12px; color: #8b5cf6; font-weight: 600;" id="file-name"></div>
                    </div>
                </div>
            </div>

            <div class="form-row full">
                <div class="form-group">
                    <label for="reference_link">Atau Link Referensi</label>
                    <input id="reference_link" name="reference_link" type="url" placeholder="https://example.com/referensi">
                </div>
            </div>

            <div class="button-group">
                <button type="button" class="btn btn-secondary" onclick="history.back()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Back
                </button>
                <button type="submit" class="btn btn-primary">
                    Submit Order
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Handle file upload
    const fileInput = document.getElementById('reference');
    const imagePreview = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    const fileName = document.getElementById('file-name');
    const uploadText = document.getElementById('upload-text');

    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const result = e.target.result;
                
                // Store in localStorage
                localStorage.setItem('orderReferenceFile', result);
                localStorage.setItem('orderReferenceFileName', file.name);
                
                // Show preview for images
                if (file.type.startsWith('image/')) {
                    previewImg.src = result;
                    imagePreview.style.display = 'block';
                }
                
                fileName.textContent = file.name;
                uploadText.textContent = 'File dipilih: ' + file.name;
            };
            
            reader.readAsDataURL(file);
        }
    });

    // Handle form submit
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get all form values
        const formData = {
            full_name: document.getElementById('full_name').value,
            phone_number: document.getElementById('phone_number').value,
            email: document.getElementById('email').value,
            title: document.getElementById('title').value,
            description: document.getElementById('description').value,
            deadline: document.getElementById('deadline').value,
            budget: document.getElementById('budget').value,
            reference_link: document.getElementById('reference_link').value
        };
        
        // Store in localStorage
        localStorage.setItem('orderData', JSON.stringify(formData));
        
        // Redirect to detail page
        window.location.href = '{{ route("orders.show") }}';
    });
</script>
@endsection
