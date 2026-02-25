@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        /* Summernote Dark Theme Overrides */
        .note-editor.note-frame {
            border: 1px solid rgba(255, 255, 255, 0.05) !important;
            background: rgba(255, 255, 255, 0.03) !important;
            border-radius: 1rem !important;
            overflow: hidden;
        }

        .note-toolbar {
            background: rgba(15, 17, 26, 0.8) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
            backdrop-filter: blur(10px);
        }

        .note-btn {
            background: transparent !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #e2e8f0 !important;
            transition: all 0.2s;
        }

        .note-btn:hover {
            background: rgba(255, 255, 255, 0.1) !important;
        }

        .note-editable {
            background: transparent !important;
            color: #e2e8f0 !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
        }

        .note-dropdown-menu {
            background: #161923 !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
        }

        .note-dropdown-item {
            color: #e2e8f0 !important;
        }

        .note-dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1) !important;
        }

        .note-modal-content {
            background: #161923 !important;
            color: #e2e8f0 !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
        }

        .note-modal-header,
        .note-modal-footer {
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        .note-form-label {
            color: #e2e8f0 !important;
        }

        .note-input {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #e2e8f0 !important;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Type content here...',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onInit: function() {
                        $('.note-editable').css('color', '#e2e8f0');
                    }
                }
            });
        });
    </script>
@endpush
