# VS Code Setup Guide - DADE AI Mock Interview Platform

## 🎯 Quick Start (3 Simple Steps)

### Step 1: Open Project in VS Code
```bash
1. Open Visual Studio Code
2. Click: File → Open Folder
3. Navigate to: C:\Users\Siddhant\OneDrive\Desktop\bentoproject
4. Click: "Select Folder"
```

### Step 2: Install Required Extensions
In VS Code, install these extensions (Ctrl+Shift+X):

1. **PHP Server** (by brapifra)
   - Allows running PHP files directly
   
2. **Live Server** (by Ritwick Dey)
   - For live preview of HTML/PHP files
   
3. **PHP Intelephense** (by Ben Mewburn)
   - PHP language support and autocomplete

### Step 3: Run the Project

#### Option A: Using PHP Server Extension (Recommended)
```bash
1. Right-click on index.php
2. Select "PHP Server: Serve Project"
3. Browser will open automatically at: http://localhost:3000
```

#### Option B: Using Live Server
```bash
1. Right-click on index.php
2. Select "Open with Live Server"
3. Browser will open automatically
```

#### Option C: Using XAMPP (If you prefer)
```bash
1. Copy the entire 'bentoproject' folder to: C:\xampp\htdocs\
2. Start XAMPP Control Panel
3. Start Apache server
4. Open browser: http://localhost/bentoproject/index.php
```

---

## 📁 Project Location

**Current Location (Ready to Use):**
```
C:\Users\Siddhant\OneDrive\Desktop\bentoproject\
```

**Files are already migrated and improved!**

---

## 🔧 VS Code Configuration

### Recommended Settings

Create `.vscode/settings.json` (if not exists):

```json
{
  "php.validate.executablePath": "C:\\xampp\\php\\php.exe",
  "liveServer.settings.root": "/",
  "liveServer.settings.port": 5500,
  "files.associations": {
    "*.php": "php"
  },
  "emmet.includeLanguages": {
    "php": "html"
  }
}
```

### Workspace Settings

The project is already configured as a VS Code workspace.

---

## 📦 Dependencies

### No Installation Required!
All dependencies are loaded via CDN:
- ✅ Bootstrap 3.4.1 (CSS/JS)
- ✅ jQuery 3.7.1
- ✅ Font Awesome 6.5.2
- ✅ Google Fonts (Fjalla One, Montserrat)

### If You Want Local Dependencies

```bash
# Navigate to project folder
cd C:\Users\Siddhant\OneDrive\Desktop\bentoproject

# Install npm (if needed for future React migration)
npm init -y

# Install packages (optional)
npm install bootstrap jquery font-awesome
```

---

## 🚀 Running the Project

### Method 1: PHP Built-in Server (Easiest)
```bash
# Open VS Code Terminal (Ctrl + `)
# Navigate to project folder
cd C:\Users\Siddhant\OneDrive\Desktop\bentoproject

# Start PHP server
php -S localhost:8000

# Open browser: http://localhost:8000
```

### Method 2: Using XAMPP
```bash
1. Copy 'bentoproject' folder to: C:\xampp\htdocs\
2. Open XAMPP Control Panel
3. Start Apache
4. Visit: http://localhost/bentoproject/index.php
```

### Method 3: VS Code PHP Server Extension
```bash
1. Right-click index.php
2. Select "PHP Server: Serve Project"
3. Auto-opens at http://localhost:3000
```

---

## 📂 Folder Structure

```
bentoproject/  ← Open this folder in VS Code
│
├── index.php                          ← START HERE
├── pages/
│   ├── school-selection.php
│   ├── instructions.php
│   ├── interview.php
│   ├── results.php
│   └── 404.php
│
├── assets/
│   ├── css/
│   │   └── dade.css                   ← All styles
│   ├── js/
│   │   └── dade.js                    ← All scripts
│   └── images/                        ← All images (55 files)
│
├── README.md                          ← Full documentation
├── PROJECT_SUMMARY.md                 ← Detailed summary
└── VSCODE_SETUP.md                    ← This file
```

---

## ✅ Verification Checklist

After opening in VS Code, verify:

- [ ] All files are visible in Explorer panel
- [ ] No error markers in files
- [ ] index.php opens without errors
- [ ] Images folder contains 55 files
- [ ] CSS file loads properly
- [ ] JavaScript file loads properly

---

## 🐛 Troubleshooting

### Issue: PHP not recognized
**Solution:**
```bash
# Add PHP to PATH or use full path:
C:\xampp\php\php.exe -S localhost:8000
```

### Issue: Images not loading
**Solution:**
```bash
# Check that assets/images/ folder exists
# Verify image paths in CSS are relative: assets/images/...
```

### Issue: CSS not loading
**Solution:**
```bash
# Verify assets/css/dade.css exists
# Check link tag in index.php: href="assets/css/dade.css"
```

### Issue: Port already in use
**Solution:**
```bash
# Use different port:
php -S localhost:8080

# Or stop the process using port 8000
netstat -ano | findstr :8000
taskkill /PID <PID> /F
```

---

## 🎨 VS Code Tips

### Useful Extensions
1. **PHP Intelephense** - PHP autocomplete
2. **Live Server** - Live preview
3. **Auto Rename Tag** - Auto close HTML tags
4. **Bracket Pair Colorizer** - Color matching brackets
5. **Path Intellisense** - Auto-complete file paths

### Keyboard Shortcuts
- `Ctrl + `` ` - Open/close terminal
- `Ctrl + P` - Quick file open
- `Ctrl + Shift + P` - Command palette
- `F5` - Start debugging (if configured)
- `Alt + Shift + F` - Format code

### Terminal Commands
```bash
# Start PHP server
php -S localhost:8000

# List files
dir

# Change directory
cd assets/css

# Open file in VS Code
code dade.css
```

---

## 📊 Project Status

✅ **Migration Complete**
- All files copied from XAMPP
- All paths fixed
- All bugs fixed
- All images included
- Fully responsive
- Production-ready

✅ **Ready to Run**
- No additional setup needed
- Just open in VS Code and run
- Works with or without XAMPP

---

## 🎯 Next Steps

1. **Open the project** in VS Code
2. **Install extensions** (PHP Server, Live Server)
3. **Run the project** using one of the methods above
4. **Test all pages**:
   - Login page
   - School selection
   - Instructions
   - Interview
   - Results
   - 404 page

5. **Enjoy your improved website!** 🎉

---

## 📞 Support

If you encounter any issues:
1. Check the README.md for detailed documentation
2. Check PROJECT_SUMMARY.md for what was changed
3. Verify all files are present in the folder
4. Ensure PHP is installed (if using PHP server)

---

## 🎉 You're All Set!

Your project is now:
- ✅ Migrated from XAMPP to VS Code
- ✅ Professionally organized
- ✅ Fully improved and optimized
- ✅ Ready to run
- ✅ Production-ready

**Just open the folder and start coding!**

---

*Last Updated: 2026*
*Status: Ready for Development 🚀*