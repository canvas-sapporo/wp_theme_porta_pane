import { defineConfig } from 'vite'
import path from 'path'

export default defineConfig({
  root: '.', // ← WordPressテーマ直下
  server: {
    cors: true,
    strictPort: true,
    port: 5173,
  },
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: 'src/js/main.js',
      },
    },
  },
})
