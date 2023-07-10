import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { defineConfig, loadEnv } from 'vite';
import { visualizer } from "rollup-plugin-visualizer";
import { splitVendorChunkPlugin } from 'vite';
import { sentryVitePlugin } from "@sentry/vite-plugin";

export default defineConfig(({ mode }) => {
  const env = loadEnv(mode, process.cwd());

  return {
    build: {
      sourcemap: true,
    },
    resolve: {
      alias: {
        vue: 'vue/dist/vue.esm-bundler.js',
      },
    },
    plugins: [
      splitVendorChunkPlugin(),
      visualizer(),
      laravel({
        input: [
          'resources/css/app.css',
          'resources/js/app.js',
        ],
        refresh: true,
      }),
      vue({
        template: {
          transformAssetUrls: {
            base: null,
            includeAbsolute: false,
          },
        },
      }),
      sentryVitePlugin({
        org: env.VITE_SENTRY_ORG,
        project: env.VITE_SENTRY_PROJECT,
        authToken: env.VITE_SENTRY_AUTH_TOKEN,
      }),
    ],
  };
});
