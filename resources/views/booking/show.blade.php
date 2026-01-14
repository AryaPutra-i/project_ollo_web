@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #f1edff 0%, #f7f5ff 100%);
        font-family: 'poppins', 'Instrument Sans', system-ui, -apple-system, sans-serif;
    }

    .order-detail-container {
        min-height: calc(100vh - 72px);
        padding: 60px 24px;
    }

    .order-detail-wrapper {
        max-width: 900px;
        margin: 0 auto;
    }

    .page-title {
        text-align: center;
        color: #6b46c1;
        font-weight: 800;
        font-size: 42px;
        letter-spacing: -1px;
        margin-bottom: 40px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .order-card {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        border-radius: 28px;
        box-shadow: 
            0 30px 80px rgba(61, 38, 150, 0.25),
            0 10px 30px rgba(0, 0, 0, 0.12),
            inset 0 1px 0 rgba(255, 255, 255, 0.8);
        padding: 48px;
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

    .client-name {
        text-align: center;
        font-size: 28px;
        font-weight: 800;
        color: #5b21b6;
        margin-bottom: 32px;
        padding-bottom: 24px;
        border-bottom: 3px dashed #e9d5ff;
    }

    .detail-grid {
        display: grid;
        gap: 24px;
        margin-bottom: 32px;
    }

    .detail-item {
        display: grid;
        grid-template-columns: 180px 1fr;
        gap: 16px;
        align-items: start;
    }

    .detail-label {
        font-weight: 700;
        font-size: 15px;
        color: #5b21b6;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .detail-label::before {
        content: '●';
        font-size: 10px;
        color: #a78bfa;
    }

    .detail-value {
        font-size: 15px;
        color: #2d3748;
        line-height: 1.6;
        background: #f9fafb;
        padding: 12px 16px;
        border-radius: 12px;
        border: 2px solid #f3f4f6;
        word-wrap: break-word;
    }

    .detail-value.description {
        white-space: pre-line;
    }

    .reference-section {
        margin-top: 32px;
        padding-top: 32px;
        border-top: 3px dashed #e9d5ff;
    }

    .reference-label {
        font-weight: 700;
        font-size: 16px;
        color: #5b21b6;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .reference-label::before {
        content: '●';
        font-size: 10px;
        color: #a78bfa;
    }

    .reference-image {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        display: block;
        border-radius: 16px;
        box-shadow: 0 12px 32px rgba(139, 92, 246, 0.25);
        border: 4px solid #f5f3ff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .reference-image:hover {
        transform: scale(1.02);
        box-shadow: 0 16px 40px rgba(139, 92, 246, 0.35);
    }

    .reference-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #8b5cf6;
        text-decoration: none;
        font-weight: 600;
        padding: 12px 20px;
        background: #f5f3ff;
        border-radius: 12px;
        border: 2px solid #e9d5ff;
        transition: all 0.3s ease;
    }

    .reference-link:hover {
        background: #ede9fe;
        border-color: #c4b5fd;
        transform: translateX(4px);
    }

    .no-reference {
        text-align: center;
        color: #9ca3af;
        font-style: italic;
        padding: 24px;
        background: #f9fafb;
        border-radius: 12px;
        border: 2px dashed #e5e7eb;
    }

    .action-section {
        margin-top: 40px;
        display: flex;
        gap: 16px;
        justify-content: center;
    }

    .btn {
        border: none;
        border-radius: 14px;
        padding: 16px 32px;
        font-weight: 700;
        font-size: 17px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        text-decoration: none;
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

    .btn-primary {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 50%, #6d28d9 100%);
        color: #ffffff;
        box-shadow: 
            0 8px 24px rgba(139, 92, 246, 0.35),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 50%, #5b21b6 100%);
        transform: translateY(-3px);
        box-shadow: 
            0 12px 32px rgba(139, 92, 246, 0.45),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
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

    @media (max-width: 768px) {
        .order-card {
            padding: 32px 24px;
        }

        .page-title {
            font-size: 32px;
            margin-bottom: 32px;
        }

        .client-name {
            font-size: 22px;
        }

        .detail-item {
            grid-template-columns: 1fr;
            gap: 8px;
        }

        .action-section {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }
</style>

<div class="order-detail-container">
    <div class="order-detail-wrapper">
        <h1 class="page-title">Order Details</h1>

        <div class="order-card">
            <h2 class="client-name" id="client-name">{{ $booking->name_customer }}</h2>

            <div class="detail-grid">
                <div class="detail-item">
                    <div class="detail-label">Phone Number</div>
                    <div class="detail-value" id="phone-number">{{ $booking->phone_customer }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Judul Project</div>
                    <div class="detail-value" id="title">{{ $booking->judul_booking }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Freelancer</div>
                    <div class="detail-value" id="freelancer">{{ $booking->freelancerUser->nama_lengkap }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Deskripsi</div>
                    <div class="detail-value description" id="description">{{ $booking->detail }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Deadline</div>
                    <div class="detail-value" id="deadline">{{ \Carbon\Carbon::parse($booking->dateline)->format('d/m/Y') }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Harga</div>
                    <div class="detail-value" id="budget">Rp {{ number_format($booking->harga, 0, ',', '.') }}</div>
                </div>
            </div>

            <div class="reference-section">
                <div class="reference-label">Referensi</div>
                <div id="reference-content">
                    @if($booking->referensi_file)
                        <img src="{{ asset('storage/' . $booking->referensi_file) }}" alt="Reference" class="reference-image">
                    @elseif($booking->referensi_link)
                        <a href="{{ $booking->referensi_link }}" class="reference-link" target="_blank">Lihat Referensi</a>
                    @else
                        <div class="no-reference">Tidak ada referensi</div>
                    @endif
                </div>
            </div>

            <div class="action-section">
                <button type="button" class="btn btn-secondary" onclick="history.back()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Back
                </button>
                <a href="#" class="btn btn-primary">
                    Contact Freelancers
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    // Load data from localStorage
    window.addEventListener('DOMContentLoaded', function() {
        const orderData = localStorage.getItem('orderData');
        const referenceFile = localStorage.getItem('orderReferenceFile');
        const referenceFileName = localStorage.getItem('orderReferenceFileName');
        
        if (orderData) {
            const data = JSON.parse(orderData);
            
            // Populate all fields
            if (data.full_name) document.getElementById('client-name').textContent = data.full_name;
            if (data.phone_number) document.getElementById('phone-number').textContent = data.phone_number;
            if (data.email) document.getElementById('email').textContent = data.email;
            if (data.title) document.getElementById('title').textContent = data.title;
            if (data.description) document.getElementById('description').textContent = data.description;
            
            if (data.deadline) {
                const date = new Date(data.deadline);
                document.getElementById('deadline').textContent = date.toLocaleDateString('id-ID');
            }
            
            if (data.budget) {
                document.getElementById('budget').textContent = 'Rp ' + parseInt(data.budget).toLocaleString('id-ID');
            }
            
            // Handle reference
            const referenceContent = document.getElementById('reference-content');
            
            if (referenceFile) {
                // Check if it's an image
                if (referenceFileName && referenceFileName.match(/\.(jpg|jpeg|png|gif|webp)$/i)) {
                    referenceContent.innerHTML = `
                        <img src="${referenceFile}" alt="Reference" class="reference-image">
                    `;
                } else {
                    referenceContent.innerHTML = `
                        <div style="text-align: center; padding: 20px; background: #f5f3ff; border-radius: 12px;">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto 12px; color: #8b5cf6;">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div style="color: #5b21b6; font-weight: 700; margin-bottom: 4px;">${referenceFileName}</div>
                            <div style="color: #9f7aea; font-size: 14px;">File berhasil diupload</div>
                        </div>
                    `;
                }
            } else if (data.reference_link) {
                referenceContent.innerHTML = `
                    <a href="${data.reference_link}" class="reference-link" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Lihat Referensi
                    </a>
                `;
            }
        }
    });
</script>
@endsection
