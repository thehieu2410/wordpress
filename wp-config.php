<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'myweb' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[+M8o7Zb;wY)v%69aGHOGl!a&s-WMSgFMBYo,Y6os}<O?1hW5[`v//M$uBG5;ZR#' );
define( 'SECURE_AUTH_KEY',  '$vAUIT1#x!:<arQ>{9MQ2(B9$Gio}hKTc1 cxH7ZRM[a3K0[lVG*E2$`qtw[6|[t' );
define( 'LOGGED_IN_KEY',    'rr%(c>+>~^7,h;Ar5iEslUFTIi)*$2/vS8Q_J&f~[7q~%ZUA44L?,tN7Cl(|;w.J' );
define( 'NONCE_KEY',        '~{ixkCa1v)lJ8lo4D<q[[:+%! 0So{V)w^fw&j[=]gIbJ9,!u~m;tPz_v=%`9,nf' );
define( 'AUTH_SALT',        'N. p58E)]m_;g(]){qs%~.b`@NQ[eFG@W_zebPW+VOTmIxiX[4*RA.DKs;TTv)>]' );
define( 'SECURE_AUTH_SALT', 'rg?*B4?0>bN<MZl8&B_ye+,0DP96T9vz]lcn`)SLMO3-:7Rnkm4[=o {vlvOX_jY' );
define( 'LOGGED_IN_SALT',   'm:~*uxR%*9=~szKF57-H`HP83%EuS+rD86|q2IBUHeq=z[eo#3,mD&vkV{#Y9Ew7' );
define( 'NONCE_SALT',       'YAH_feqf7I%-g!eUC1u6MHN{ 2^4w@w9~LB P-M]0w;FmU?>/c6MK,S^-aO/06Jb' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
