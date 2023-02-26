/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      //confifuracion para agregar colores propios
      colors: {
        'primario': '#fdab01',
        'secundario': '#ffba7f',
        'terceario': '#fe9079',
        'cuarto': '#f95844',
        'quinto': '#f84c07',
        'gris': '#757575',
        'grisClaro': '#dfe9f3',
      }
    },
  },
  plugins: [],
}




// --blanco: #ffffff;
//     --oscuro: #212121;
//     --primario: #fdab01;
//     --secundario: #ffba7f;
//     --terceario: #fe9079;
//     --cuarto: #f95844;
//     --quinto: #f84c07;
//     --gris: #757575;
//     --grisClaro: #dfe9f3;