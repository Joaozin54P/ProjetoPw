:: Rodando composer install
call composer install

:: Copiando o arquivo .env.example para .env
call copy .env.example .env

:: Gerando a chave de aplicação
call php artisan key:generate

call php artisan migrate

:: Perguntando se está usando o NPM
set /p npm=Esta usando o NPM [s/n] (default - s)?: 
if /i "%npm%"=="s" (
    :: Instalando dependências com NPM
    call npm install

    :: Iniciando npm run dev e php artisan serve
    start /b npm run dev & start /b php artisan serve
) else (
    start /b php artisan serve
)
pause