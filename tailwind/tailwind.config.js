const { yellow } = require('tailwindcss/colors.js');

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				'lato': ['lato', 'sans-serif']
			},
			fontSize: {
				h1: ['3.562rem', { lineHeight: '120%', fontWeight: '700' }],
				h2: ['3rem', { lineHeight: '120%', fontWeight: '700' }],
				h3: ['2.5rem', { lineHeight: '120%', fontWeight: '700' }],
				h4: ['2.062rem', { lineHeight: '120%', fontWeight: '700' }],
				h5: ['1.750rem', { lineHeight: '120%', fontWeight: '700' }],
				xl: ['1.438rem', '120%'],
				'xl-b': ['1.438rem', { lineHeight: '120%', fontWeight: '700' }],
				m: ['1.188rem', '120%'],
				'm-b': ['1.188rem', { lineHeight: '120%', fontWeight: '700' }],
				body: ['1rem', '120%'],
				'body-b': ['1rem', { lineHeight: '120%', fontWeight: '700' }],
				s: ['0.812rem', '120%'],
				's-b': ['0.812rem', { lineHeight: '120%', fontWeight: '700' }],
				xs: ['0.688rem', '120%'],
				'xs-b': ['0.688rem', { lineHeight: '120%', fontWeight: '700' }],
			},
			colors: {
				orange: {
					telesistema: '#FF7A00',
				},
				brown: {
					200: '#F0E1D6',
					400: '#663815',
				},
				green: {
				},
				blue: {
					telesistema: '#00668F',
					50: '#00AEE6',
					100: '#EEF2FA',
					300: '#CDEAFB',
					600: '#12254A',
					900: '#070F14',
					1000: '#2E5FC0'
				},
				lightBlue: {

				},
				yellow: {
					telesistema: '#FADE69',
				},
				gray: {
					1000: '#D0D2D4',
					100: '#111111',
				},
				overlay: {

				},
			}
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
