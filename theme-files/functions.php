/* Font */
function add_google_fonts() {
wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap', false );}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );