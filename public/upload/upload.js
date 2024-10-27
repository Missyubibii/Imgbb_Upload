
    document.getElementById('languageDropdownToggle').addEventListener('click', function() {
        var languageDropdownMenu = document.getElementById('languageDropdownMenu');
        var dropdownMenu = document.getElementById('dropdownMenu');
        
        // Ẩn menu thả khác
        dropdownMenu.classList.add('hidden');
        
        // Bật/tắt menu ngôn ngữ
        languageDropdownMenu.classList.toggle('hidden');
    });

    document.getElementById('dropdownToggle').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        var languageDropdownMenu = document.getElementById('languageDropdownMenu');
        
        // Ẩn menu thả khác
        languageDropdownMenu.classList.add('hidden');
        
        // Bật/tắt menu giới thiệu
        dropdownMenu.classList.toggle('hidden');
    });
