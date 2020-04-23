module.exports = {
  theme: {
    fontFamily: {
      sans: [
        'Rubik',
        '-apple-system',
        'BlinkMacSystemFont',
        '"Segoe UI"',
        'Roboto',
        '"Helvetica Neue"',
        'Arial',
        '"Noto Sans"',
        'sans-serif',
        '"Apple Color Emoji"',
        '"Segoe UI Emoji"',
        '"Segoe UI Symbol"',
        '"Noto Color Emoji"',
      ],
      serif: [
        'Georgia',
        'Cambria',
        '"Times New Roman"',
        'Times',
        'serif',
      ],
      mono: [
        'Menlo',
        'Monaco',
        'Consolas',
        '"Liberation Mono"',
        '"Courier New"',
        'monospace',
      ],
    },
    extend: {
        width: theme => ({
            160: '40rem',
        }),
        colors: {
            primary: {
                default: "#F0B429",
                "050": "#FFFBEA",
                "100": "#FFF3C4",
                "200": "#FCE588",
                "300": "#FADB5F",
                "400": "#F7C948",
                "500": "#F0B429",
                "600": "#DE911D",
                "700": "#CB6E17",
                "800": "#B44D12",
                "900": "#8D2B0B",
            },
            neutral: {
                default: "#7E7E7E",
                "050": "#F7F7F7",
                "100": "#E1E1E1",
                "200": "#CFCFCF",
                "300": "#B1B1B1",
                "400": "#9E9E9E",
                "500": "#7E7E7E",
                "600": "#626262",
                "700": "#515151",
                "800": "#3B3B3B",
                "900": "#222222",
            }
        }
    }
  },
  variants: {},
  plugins: []
}