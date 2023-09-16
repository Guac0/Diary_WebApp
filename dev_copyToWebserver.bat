@echo off
echo "This will copy all html and php files from the current directory to the provided webserver directory, overwriting any existing files with the same name. Do you wish to continue?"
pause
for %%f in (*.html) do (
    echo %%~nf
    REM ffmpeg -i "%%~nf.mp4" -preset veryfast "%%~nf_compressed.mp4"
    copy /b/v/y "%%~nf.html" "C:\xampp\htdocs\diaryapp\%%~nf.html"
)
for %%f in (*.php) do (
    echo %%~nf
    REM ffmpeg -i "%%~nf.mp4" -preset veryfast "%%~nf_compressed.mp4"
    copy /b/v/y "%%~nf.php" "C:\xampp\htdocs\diaryapp\%%~nf.php"
)
REM for %f in (.\*) do @echo %f
REM do ffmpeg -i "$i" "cc${i}"; done
echo "Files moved."
pause