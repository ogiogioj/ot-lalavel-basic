import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],

    server: {
        // Vite 개발 서버를 실행할 때 라라벨 세일 WSL2(Linux용 Windows 하위 시스템)에서는 브라우저가 개발 서버와 통신 구성
        hmr: {
            host: 'localhost',
            refresh: true,
        },
        // Vite - npm run dev 없이 소스 코드 수정 후 바로 반영
        watch: {
            usePolling: true,
        }
    },
});
