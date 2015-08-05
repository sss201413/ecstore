@echo off
if "%OS%"=="Windows_NT" @setlocal
set SCRIPT_DIR=%~dp0
set PHP_COMMAND=D:\phpStudy\php53n\php.exe
if "%SCRIPT_DIR%" == "" (
  %PHP_COMMAND% "cmd" %*
) else (
  %PHP_COMMAND% "%SCRIPT_DIR%\cmd" %*
)
if "%OS%"=="Windows_NT" @endlocal