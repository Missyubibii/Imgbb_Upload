<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ImgBB-Máy chủ tải ảnh miễn phí</title>
        {{-- dropzone --}}
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>
<body>
    <nav class="border-b  border-gray-300 rrelative bg-white shadow z-30">
        <div class="content-width mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex h-15 items-center justify-between">
                <div class="relative px-6 py-3  md:items-center">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="relative hidden sm:flex items-center space-x-6">
                        <div class="relative">
                            <div class="flex items-center space-x-2 hover:text-sky-600 cursor-pointer z-40" id="dropdownToggle">
                                <i class="fa-regular fa-circle-question text-xl mr-1"></i> <!-- Giảm kích thước từ text-2xl xuống text-xl -->
                                <span>Giới thiệu</span>
                                <i class="fa-solid fa-caret-down text-sm"></i> <!-- Thay đổi kích thước cho icon caret -->
                            </div>                            
                            <div id="dropdownMenu" class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden z-40">
                                <ul class="py-1">
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-code mr-2"></i>Plugin</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-gear mr-2"></i>API</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-landmark mr-2"></i> Terms of service</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-lock mr-2"></i> Privacy</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-at mr-2"></i>Contact</li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center space-x-2 hover:text-sky-600 cursor-pointer" id="languageDropdownToggle">
                                <i class="fa-solid fa-language text-lm"></i>
                                <span>VI</span>
                                <i class="fa-solid fa-caret-down text-sm"></i>
                            </div>
                            <div id="languageDropdownMenu" class="absolute left-0 mt-2 w-[950px] bg-white border border-gray-300 rounded-md shadow-lg hidden z-40">
                                <div class="grid grid-cols-5 gap-2 p-2">
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="flex justify-center flex-grow sm:flex-grow-0 ">
                    <a href="/"><img src="{{ url('') }}/img/logo.png" alt="Logo" class="px-1 py-1"></a>
                </div>
    
                <div class="flex items-center space-x-4 relative">
                    <span class="cursor-pointer flex items-center" id="uploadToggle">
                        <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                        <span class="hidden sm:inline ml-2">Upload</span> 
                    </span>
                    <span class="cursor-pointer flex items-center">
                        <i class="fa-solid fa-right-to-bracket text-xl"></i>
                        <span class="hidden sm:inline ml-2">Đăng nhập</span>
                    </span>
                    <a href="#" class="bg-sky-600 text-white px-2 py-1 rounded hover:bg-sky-700 transition duration-300 hidden sm:block">Đăng ký</a>
                </div>
            </div>
            
            <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-0 opacity-0 pointer-events-none transition-opacity duration-500 ease-in-out"></div>
            <form method="POST" enctype="multipart/form-data" ">
                @csrf
                <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-10 opacity-0 pointer-events-none transition-opacity duration-500 ease-in-out"></div>
            
                <!-- Dropdown upload ảnh -->
                <div id="uploadDropdown" class="fixed left-0 right-0 w-full bg-white border-t border-gray-300 shadow-lg overflow-y-auto transform -translate-y-full opacity-0 pointer-events-none transition-all duration-500 ease-in-out z-10" style="height: 45vh">
                    <div class="p-4">
                        <div class="position-absolute">
                            <span class="text-xs font-nor mb-4 text-gray-600">JPG PNG BMP GIF TIF WEBP HEIC AVIF PDF</span>
                            <span class="text-xs font-nor mb-4 text-gray-400"> 32 MB</span>
                        </div>
                        <div action="{{ route('upload') }}" id="my-dropzone" class="dropzone mx-auto flex flex-col items-center justify-center py-12 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-36 text-custom-blue">
                                <path fill-rule="evenodd" d="M10.5 3.75a6 6 0 0 0-5.98 6.496A5.25 5.25 0 0 0 6.75 20.25H18a4.5 4.5 0 0 0 2.206-8.423 3.75 3.75 0 0 0-4.133-4.303A6.001 6.001 0 0 0 10.5 3.75Zm2.03 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v4.94a.75.75 0 0 0 1.5 0v-4.94l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
                            </svg>
                            <p>Kéo thả hoặc paste (Ctrl + V) ảnh vào đây để upload</p>
                            <h2 class="text-2xl font-bold mb-4">Tải lên hình ảnh</h2>
                            <!-- Dropzone area -->
                            <div class="dropzone-previews w-full"></div>
                            <button id="closeDropdown" type="button" class="bg-gray-500 text-white px-4 py-2 rounded mt-2">Đóng</button>
                        </div>
                    </div>
                </div>
            </form>            
        </div>
    </nav>
        <div class=" mx-auto flex flex-col items-center justify-center min-h-screen  py-12 text-center">
                <div class="mb-8">
                        <h1 class="text-5xl font-semibold text-gray-800 my-2.5;" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Đăng và chia sẻ những bức ảnh của bạn</h1>
                        <p class="w-[790px] my-5 text-xl text-gray-600 hidden sm:flex" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Drag and drop anywhere you want and start uploading your images now. 32 MB limit. Direct image links, BBCode and HTML thumbnails.</p>
                </div>
                <div>
            <a href="#" class="bg-sky-600 text-white px-6 py-3 rounded hover:bg-sky-700 transition duration-300">Start uploading</a>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM đã sẵn sàng');

    function toggleDropdown(toggleId, menuId) {
        const toggle = document.getElementById(toggleId);
        const menu = document.getElementById(menuId);

        console.log(`Tìm thấy toggle ${toggleId}:`, !!toggle);
        console.log(`Tìm thấy menu ${menuId}:`, !!menu);

        if (toggle && menu) {
            toggle.addEventListener('click', function(event) {
                event.stopPropagation();
                menu.classList.toggle('hidden'); // Chuyển đổi trạng thái hiển thị
                console.log(`Đã chuyển đổi trạng thái của ${menuId}`);
            });
        } else {
            console.error(`Không tìm thấy phần tử cho ${toggleId} hoặc ${menuId}`);
        }
    }

    toggleDropdown('dropdownToggle', 'dropdownMenu');
    toggleDropdown('languageDropdownToggle', 'languageDropdownMenu');

    // Kiểm tra xem các phần tử có tồn tại không
    console.log('dropdownToggle exists:', !!document.getElementById('dropdownToggle'));
    console.log('dropdownMenu exists:', !!document.getElementById('dropdownMenu'));
    console.log('languageDropdownToggle exists:', !!document.getElementById('languageDropdownToggle'));
    console.log('languageDropdownMenu exists:', !!document.getElementById('languageDropdownMenu'));

    // Xử lý hiển thị/ẩn phần upload
    const uploadToggle = document.getElementById('uploadToggle');
    const uploadDropdown = document.getElementById('uploadDropdown');
    const closeDropdown = document.getElementById('closeDropdown');

    console.log('uploadToggle exists:', !!uploadToggle);
    console.log('uploadDropdown exists:', !!uploadDropdown);
    console.log('closeDropdown exists:', !!closeDropdown);

    // Hàm để đóng dropdown với hiệu ứng fade-out
    function closeUploadDropdown() {
        if (uploadDropdown) {
            uploadDropdown.classList.add('opacity-0', 'pointer-events-none', '-translate-y-full');
            uploadDropdown.classList.remove('opacity-100'); // Đảm bảo không còn opacity 100
            console.log('Đã đóng uploadDropdown');
        }
    }

    if (uploadToggle && uploadDropdown) {
        uploadToggle.addEventListener('click', function(event) {
            event.stopPropagation();
            uploadDropdown.classList.toggle('opacity-0');
            uploadDropdown.classList.toggle('pointer-events-none');
            uploadDropdown.classList.toggle('-translate-y-full');
            uploadDropdown.classList.toggle('opacity-100'); // Chuyển sang visible
            console.log('Đã chuyển đổi trạng thái của uploadDropdown');
        });
    }

    if (closeDropdown) {
        closeDropdown.addEventListener('click', function() {
            closeUploadDropdown(); // Gọi hàm đóng dropdown
        });
    }

    // Đóng uploadDropdown khi click bên ngoài
    document.addEventListener('click', function(event) {
        if (uploadDropdown && !uploadDropdown.contains(event.target) && !uploadToggle.contains(event.target)) {
            closeUploadDropdown(); // Gọi hàm đóng dropdown
            }
        });
    });

        // Cấu hình Dropzone
        Dropzone.options.myDropzone = {
        paramName: "images[]", // Tên của tham số sẽ được gửi tới server
        maxFilesize: 32, // MB
        acceptedFiles: "image/*,.pdf", // Các loại tệp được chấp nhận
        addRemoveLinks: true,
        init: function() {
            this.on("success", function(file, response) {
                console.log("Tải lên thành công:", response);
                // Xử lý phản hồi từ server nếu cần
            });
            this.on("error", function(file, response) {
                console.log("Đã xảy ra lỗi:", response);
            });
            this.on("removedfile", function(file) {
                // Xử lý khi tệp bị xóa nếu cần
            });
        }
    };
</script>

</html>
