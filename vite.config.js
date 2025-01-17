import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import path from 'path'

export default defineConfig(({ mode }) => {
  return {

    plugins: [react()],

    // config
    root: 'src',
    base: mode === 'development' ? '/php-react-vite-boilerplate/src/' : '/dist/',

    build: {
      // output dir for production build
      outDir: '../public/dist',
      emptyOutDir: true,

      // emit manifest so PHP can find the hashed files
      manifest: true,

      target: 'es2015',

      // our main entry
      rollupOptions: {
        input: path.resolve(__dirname, 'src/index.jsx'),
      }
    },

    server: {
      // required to load scripts from custom host
      cors: true,
      hmr:true,
      // we need a strict port to match on PHP side
      strictPort: true,
      port: 3000,
    },
  }
})
