-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2022 pada 17.56
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kode_barang` varchar(12) NOT NULL,
  `id_header_barang` int(11) NOT NULL,
  `status_barang` set('Tersedia','Tidak Tersedia') NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`kode_barang`, `id_header_barang`, `status_barang`, `kondisi_barang`) VALUES
('BRG-001', 10, 'Tidak Tersedia', 'Baik'),
('BRG-002', 10, 'Tersedia', 'Baik'),
('BRG-003', 10, 'Tersedia', 'Baik'),
('BRG-004', 10, 'Tersedia', 'Baik'),
('BRG-005', 10, 'Tersedia', 'Baik'),
('BRG-006', 10, 'Tersedia', 'Baik'),
('BRG-007', 10, 'Tersedia', 'Baik'),
('BRG-008', 10, 'Tersedia', 'Baik'),
('BRG-009', 10, 'Tersedia', 'Baik'),
('BRG-010', 10, 'Tersedia', 'Baik'),
('BRG-011', 10, 'Tersedia', 'Baik'),
('BRG-012', 10, 'Tersedia', 'Baik'),
('BRG-013', 10, 'Tersedia', 'Baik'),
('BRG-014', 10, 'Tersedia', 'Baik'),
('BRG-015', 10, 'Tersedia', 'Baik'),
('BRG-016', 10, 'Tersedia', 'Baik'),
('BRG-017', 10, 'Tersedia', 'Baik'),
('BRG-018', 10, 'Tersedia', 'Baik'),
('BRG-019', 10, 'Tersedia', 'Baik'),
('BRG-020', 10, 'Tersedia', 'Baik'),
('BRG-021', 10, 'Tersedia', 'Baik'),
('BRG-022', 10, 'Tersedia', 'Baik'),
('BRG-023', 10, 'Tersedia', 'Baik'),
('BRG-024', 10, 'Tersedia', 'Baik'),
('BRG-025', 10, 'Tersedia', 'Baik'),
('BRG-026', 10, 'Tersedia', 'Baik'),
('BRG-027', 10, 'Tersedia', 'Baik'),
('BRG-028', 10, 'Tersedia', 'Baik'),
('BRG-029', 10, 'Tersedia', 'Baik'),
('BRG-030', 10, 'Tersedia', 'Baik'),
('BRG-031', 10, 'Tersedia', 'Baik'),
('BRG-032', 10, 'Tersedia', 'Baik'),
('BRG-033', 10, 'Tersedia', 'Baik'),
('BRG-034', 10, 'Tersedia', 'Baik'),
('BRG-035', 10, 'Tersedia', 'Baik'),
('BRG-036', 10, 'Tersedia', 'Baik'),
('BRG-037', 10, 'Tersedia', 'Baik'),
('BRG-038', 10, 'Tersedia', 'Baik'),
('BRG-039', 10, 'Tersedia', 'Baik'),
('BRG-040', 10, 'Tersedia', 'Baik'),
('BRG-041', 10, 'Tersedia', 'Baik'),
('BRG-042', 10, 'Tersedia', 'Baik'),
('BRG-043', 10, 'Tersedia', 'Baik'),
('BRG-044', 10, 'Tersedia', 'Baik'),
('BRG-045', 10, 'Tersedia', 'Baik'),
('BRG-046', 10, 'Tersedia', 'Baik'),
('BRG-047', 10, 'Tersedia', 'Baik'),
('BRG-048', 10, 'Tersedia', 'Baik'),
('BRG-049', 10, 'Tersedia', 'Baik'),
('BRG-050', 10, 'Tersedia', 'Baik'),
('BRG-051', 10, 'Tersedia', 'Baik'),
('BRG-052', 10, 'Tersedia', 'Baik'),
('BRG-053', 10, 'Tersedia', 'Baik'),
('BRG-054', 10, 'Tersedia', 'Baik'),
('BRG-055', 10, 'Tersedia', 'Baik'),
('BRG-056', 10, 'Tersedia', 'Baik'),
('BRG-057', 10, 'Tersedia', 'Baik'),
('BRG-058', 10, 'Tersedia', 'Baik'),
('BRG-059', 10, 'Tersedia', 'Baik'),
('BRG-060', 10, 'Tersedia', 'Baik'),
('BRG-061', 10, 'Tersedia', 'Baik'),
('BRG-062', 10, 'Tersedia', 'Baik'),
('BRG-063', 10, 'Tersedia', 'Baik'),
('BRG-064', 10, 'Tersedia', 'Baik'),
('BRG-065', 10, 'Tersedia', 'Baik'),
('BRG-066', 10, 'Tersedia', 'Baik'),
('BRG-067', 10, 'Tersedia', 'Baik'),
('BRG-068', 10, 'Tersedia', 'Baik'),
('BRG-069', 10, 'Tersedia', 'Baik'),
('BRG-070', 10, 'Tersedia', 'Baik'),
('BRG-071', 11, 'Tersedia', 'Baik'),
('BRG-072', 11, 'Tersedia', 'Baik'),
('BRG-073', 11, 'Tersedia', 'Baik'),
('BRG-074', 11, 'Tersedia', 'Baik'),
('BRG-075', 11, 'Tersedia', 'Baik'),
('BRG-076', 11, 'Tersedia', 'Baik'),
('BRG-077', 11, 'Tersedia', 'Baik'),
('BRG-078', 12, 'Tersedia', 'Baik'),
('BRG-079', 12, 'Tersedia', 'Baik'),
('BRG-080', 12, 'Tersedia', 'Baik'),
('BRG-081', 12, 'Tersedia', 'Baik'),
('BRG-082', 12, 'Tersedia', 'Baik'),
('BRG-083', 12, 'Tersedia', 'Baik'),
('BRG-084', 12, 'Tersedia', 'Baik'),
('BRG-085', 12, 'Tersedia', 'Baik'),
('BRG-086', 12, 'Tersedia', 'Baik'),
('BRG-087', 12, 'Tersedia', 'Baik'),
('BRG-088', 12, 'Tersedia', 'Baik'),
('BRG-089', 12, 'Tersedia', 'Baik'),
('BRG-090', 12, 'Tersedia', 'Baik'),
('BRG-091', 12, 'Tersedia', 'Baik'),
('BRG-092', 12, 'Tersedia', 'Baik'),
('BRG-093', 13, 'Tersedia', 'Baik'),
('BRG-094', 13, 'Tersedia', 'Baik'),
('BRG-095', 13, 'Tersedia', 'Baik'),
('BRG-096', 13, 'Tersedia', 'Baik'),
('BRG-097', 13, 'Tersedia', 'Baik'),
('BRG-098', 13, 'Tersedia', 'Baik'),
('BRG-099', 13, 'Tersedia', 'Baik'),
('BRG-100', 13, 'Tersedia', 'Baik'),
('BRG-101', 13, 'Tersedia', 'Baik'),
('BRG-102', 13, 'Tersedia', 'Baik'),
('BRG-103', 14, 'Tersedia', 'Baik'),
('BRG-104', 15, 'Tidak Tersedia', 'Rusak Berat'),
('BRG-105', 15, 'Tersedia', 'Baik'),
('BRG-106', 16, 'Tersedia', 'Baik'),
('BRG-107', 16, 'Tersedia', 'Baik'),
('BRG-108', 16, 'Tersedia', 'Baik'),
('BRG-109', 16, 'Tersedia', 'Rusak Ringan'),
('BRG-110', 16, 'Tersedia', 'Baik'),
('BRG-111', 16, 'Tersedia', 'Baik'),
('BRG-112', 16, 'Tersedia', 'Baik'),
('BRG-113', 16, 'Tersedia', 'Baik'),
('BRG-114', 16, 'Tersedia', 'Baik'),
('BRG-115', 16, 'Tersedia', 'Baik'),
('BRG-116', 16, 'Tersedia', 'Baik'),
('BRG-117', 16, 'Tersedia', 'Baik'),
('BRG-118', 16, 'Tersedia', 'Baik'),
('BRG-119', 16, 'Tersedia', 'Baik'),
('BRG-120', 16, 'Tersedia', 'Baik'),
('BRG-121', 16, 'Tersedia', 'Baik'),
('BRG-122', 16, 'Tersedia', 'Baik'),
('BRG-123', 16, 'Tersedia', 'Baik'),
('BRG-124', 16, 'Tersedia', 'Baik'),
('BRG-125', 16, 'Tersedia', 'Baik'),
('BRG-126', 16, 'Tersedia', 'Baik'),
('BRG-127', 16, 'Tersedia', 'Baik'),
('BRG-128', 16, 'Tersedia', 'Baik'),
('BRG-129', 16, 'Tersedia', 'Baik'),
('BRG-130', 16, 'Tersedia', 'Baik'),
('BRG-131', 17, 'Tersedia', 'Rusak Berat'),
('BRG-132', 17, 'Tersedia', 'Baik'),
('BRG-133', 17, 'Tersedia', 'Baik'),
('BRG-134', 17, 'Tersedia', 'Baik'),
('BRG-135', 17, 'Tersedia', 'Baik'),
('BRG-136', 17, 'Tersedia', 'Baik'),
('BRG-137', 17, 'Tersedia', 'Baik'),
('BRG-138', 17, 'Tersedia', 'Baik'),
('BRG-139', 17, 'Tersedia', 'Baik'),
('BRG-140', 17, 'Tersedia', 'Baik'),
('BRG-141', 17, 'Tersedia', 'Baik'),
('BRG-142', 17, 'Tersedia', 'Baik'),
('BRG-143', 17, 'Tersedia', 'Baik'),
('BRG-144', 17, 'Tersedia', 'Baik'),
('BRG-145', 17, 'Tersedia', 'Baik'),
('BRG-146', 17, 'Tersedia', 'Baik'),
('BRG-147', 17, 'Tersedia', 'Baik'),
('BRG-148', 17, 'Tersedia', 'Baik'),
('BRG-149', 17, 'Tersedia', 'Baik'),
('BRG-150', 17, 'Tersedia', 'Baik'),
('BRG-151', 17, 'Tersedia', 'Baik'),
('BRG-152', 17, 'Tersedia', 'Baik'),
('BRG-153', 17, 'Tersedia', 'Baik'),
('BRG-154', 17, 'Tersedia', 'Baik'),
('BRG-155', 17, 'Tersedia', 'Baik'),
('BRG-156', 17, 'Tersedia', 'Baik'),
('BRG-157', 17, 'Tersedia', 'Baik'),
('BRG-158', 17, 'Tersedia', 'Baik'),
('BRG-159', 17, 'Tersedia', 'Baik'),
('BRG-160', 17, 'Tersedia', 'Baik'),
('BRG-161', 17, 'Tersedia', 'Baik'),
('BRG-162', 17, 'Tersedia', 'Baik'),
('BRG-163', 17, 'Tersedia', 'Baik'),
('BRG-164', 17, 'Tersedia', 'Baik'),
('BRG-165', 17, 'Tersedia', 'Baik'),
('BRG-166', 17, 'Tersedia', 'Baik'),
('BRG-167', 17, 'Tersedia', 'Baik'),
('BRG-168', 17, 'Tersedia', 'Baik'),
('BRG-169', 17, 'Tersedia', 'Baik'),
('BRG-170', 17, 'Tersedia', 'Baik'),
('BRG-171', 17, 'Tersedia', 'Baik'),
('BRG-172', 17, 'Tersedia', 'Baik'),
('BRG-173', 17, 'Tersedia', 'Baik'),
('BRG-174', 17, 'Tersedia', 'Baik'),
('BRG-175', 17, 'Tersedia', 'Baik'),
('BRG-176', 17, 'Tersedia', 'Baik'),
('BRG-177', 17, 'Tersedia', 'Baik'),
('BRG-178', 17, 'Tersedia', 'Baik'),
('BRG-179', 17, 'Tersedia', 'Baik'),
('BRG-180', 17, 'Tersedia', 'Baik'),
('BRG-181', 18, 'Tersedia', 'Baik'),
('BRG-182', 18, 'Tersedia', 'Baik'),
('BRG-183', 18, 'Tersedia', 'Baik'),
('BRG-184', 18, 'Tersedia', 'Baik'),
('BRG-185', 18, 'Tersedia', 'Baik'),
('BRG-186', 18, 'Tersedia', 'Baik'),
('BRG-187', 18, 'Tersedia', 'Baik'),
('BRG-188', 18, 'Tersedia', 'Baik'),
('BRG-189', 18, 'Tersedia', 'Baik'),
('BRG-190', 18, 'Tersedia', 'Baik'),
('BRG-191', 18, 'Tersedia', 'Baik'),
('BRG-192', 18, 'Tersedia', 'Baik'),
('BRG-193', 18, 'Tersedia', 'Baik'),
('BRG-194', 18, 'Tersedia', 'Baik'),
('BRG-195', 18, 'Tersedia', 'Baik'),
('BRG-196', 18, 'Tersedia', 'Baik'),
('BRG-197', 18, 'Tersedia', 'Baik'),
('BRG-198', 18, 'Tersedia', 'Baik'),
('BRG-199', 18, 'Tersedia', 'Baik'),
('BRG-200', 18, 'Tersedia', 'Baik'),
('BRG-201', 18, 'Tersedia', 'Baik'),
('BRG-202', 18, 'Tersedia', 'Baik'),
('BRG-203', 18, 'Tersedia', 'Baik'),
('BRG-204', 18, 'Tersedia', 'Baik'),
('BRG-205', 18, 'Tersedia', 'Baik'),
('BRG-206', 19, 'Tersedia', 'Baik'),
('BRG-207', 19, 'Tidak Tersedia', 'Hilang'),
('BRG-208', 19, 'Tersedia', 'Baik'),
('BRG-209', 19, 'Tersedia', 'Baik'),
('BRG-210', 19, 'Tersedia', 'Baik'),
('BRG-211', 20, 'Tersedia', 'Baik'),
('BRG-212', 20, 'Tersedia', 'Baik'),
('BRG-213', 20, 'Tersedia', 'Baik'),
('BRG-214', 20, 'Tersedia', 'Baik'),
('BRG-215', 20, 'Tersedia', 'Baik'),
('BRG-216', 20, 'Tersedia', 'Baik'),
('BRG-217', 20, 'Tersedia', 'Baik'),
('BRG-218', 20, 'Tersedia', 'Baik'),
('BRG-219', 20, 'Tersedia', 'Baik'),
('BRG-220', 20, 'Tersedia', 'Baik'),
('BRG-221', 20, 'Tersedia', 'Baik'),
('BRG-222', 20, 'Tersedia', 'Baik'),
('BRG-223', 20, 'Tersedia', 'Baik'),
('BRG-224', 20, 'Tersedia', 'Baik'),
('BRG-225', 20, 'Tersedia', 'Baik'),
('BRG-226', 20, 'Tersedia', 'Baik'),
('BRG-227', 20, 'Tersedia', 'Baik'),
('BRG-228', 20, 'Tersedia', 'Baik'),
('BRG-229', 20, 'Tersedia', 'Baik'),
('BRG-230', 20, 'Tersedia', 'Baik'),
('BRG-231', 20, 'Tersedia', 'Baik'),
('BRG-232', 20, 'Tersedia', 'Baik'),
('BRG-233', 20, 'Tersedia', 'Baik'),
('BRG-234', 20, 'Tersedia', 'Baik'),
('BRG-235', 20, 'Tersedia', 'Baik'),
('BRG-236', 20, 'Tersedia', 'Baik'),
('BRG-237', 20, 'Tersedia', 'Baik'),
('BRG-238', 20, 'Tersedia', 'Baik'),
('BRG-239', 20, 'Tersedia', 'Baik'),
('BRG-240', 20, 'Tersedia', 'Baik'),
('BRG-241', 20, 'Tersedia', 'Baik'),
('BRG-242', 20, 'Tersedia', 'Baik'),
('BRG-243', 20, 'Tersedia', 'Baik'),
('BRG-244', 20, 'Tersedia', 'Baik'),
('BRG-245', 20, 'Tersedia', 'Baik'),
('BRG-246', 20, 'Tersedia', 'Baik'),
('BRG-247', 20, 'Tersedia', 'Baik'),
('BRG-248', 20, 'Tersedia', 'Baik'),
('BRG-249', 20, 'Tersedia', 'Baik'),
('BRG-250', 20, 'Tersedia', 'Baik'),
('BRG-251', 20, 'Tersedia', 'Baik'),
('BRG-252', 20, 'Tersedia', 'Baik'),
('BRG-253', 20, 'Tersedia', 'Baik'),
('BRG-254', 20, 'Tersedia', 'Baik'),
('BRG-255', 20, 'Tersedia', 'Baik'),
('BRG-256', 20, 'Tersedia', 'Baik'),
('BRG-257', 20, 'Tersedia', 'Baik'),
('BRG-258', 20, 'Tersedia', 'Baik'),
('BRG-259', 20, 'Tersedia', 'Baik'),
('BRG-260', 20, 'Tersedia', 'Baik'),
('BRG-261', 21, 'Tersedia', 'Rusak Berat'),
('BRG-262', 21, 'Tersedia', 'Baik'),
('BRG-263', 22, 'Tersedia', 'Baik'),
('BRG-264', 23, 'Tersedia', 'Baik'),
('BRG-265', 24, 'Tersedia', 'Baik'),
('BRG-266', 24, 'Tersedia', 'Baik'),
('BRG-267', 24, 'Tersedia', 'Rusak Berat'),
('BRG-268', 24, 'Tersedia', 'Rusak Berat'),
('BRG-269', 24, 'Tersedia', 'Baik'),
('BRG-270', 24, 'Tersedia', 'Baik'),
('BRG-271', 24, 'Tersedia', 'Baik'),
('BRG-272', 24, 'Tersedia', 'Baik'),
('BRG-273', 24, 'Tersedia', 'Baik'),
('BRG-274', 24, 'Tersedia', 'Baik'),
('BRG-275', 25, 'Tersedia', 'Baik'),
('BRG-276', 25, 'Tersedia', 'Baik'),
('BRG-277', 25, 'Tersedia', 'Baik'),
('BRG-278', 25, 'Tersedia', 'Baik'),
('BRG-279', 25, 'Tersedia', 'Baik'),
('BRG-280', 26, 'Tersedia', 'Baik'),
('BRG-281', 26, 'Tersedia', 'Baik'),
('BRG-282', 26, 'Tersedia', 'Baik'),
('BRG-283', 26, 'Tersedia', 'Baik'),
('BRG-284', 26, 'Tersedia', 'Baik'),
('BRG-285', 26, 'Tersedia', 'Baik'),
('BRG-286', 26, 'Tersedia', 'Baik'),
('BRG-287', 26, 'Tersedia', 'Baik'),
('BRG-288', 26, 'Tersedia', 'Baik'),
('BRG-289', 26, 'Tersedia', 'Baik'),
('BRG-290', 26, 'Tersedia', 'Baik'),
('BRG-291', 26, 'Tersedia', 'Baik'),
('BRG-292', 26, 'Tersedia', 'Baik'),
('BRG-293', 26, 'Tersedia', 'Baik'),
('BRG-294', 26, 'Tersedia', 'Baik'),
('BRG-295', 27, 'Tersedia', 'Baik'),
('BRG-296', 27, 'Tersedia', 'Baik'),
('BRG-297', 27, 'Tersedia', 'Baik'),
('BRG-298', 27, 'Tersedia', 'Baik'),
('BRG-299', 27, 'Tersedia', 'Baik'),
('BRG-300', 27, 'Tersedia', 'Baik'),
('BRG-301', 27, 'Tersedia', 'Baik'),
('BRG-302', 27, 'Tersedia', 'Baik'),
('BRG-303', 27, 'Tersedia', 'Baik'),
('BRG-304', 27, 'Tersedia', 'Baik'),
('BRG-305', 27, 'Tersedia', 'Baik'),
('BRG-306', 27, 'Tersedia', 'Baik'),
('BRG-307', 27, 'Tersedia', 'Baik'),
('BRG-308', 27, 'Tersedia', 'Baik'),
('BRG-309', 27, 'Tersedia', 'Baik'),
('BRG-310', 28, 'Tersedia', 'Baik'),
('BRG-311', 28, 'Tersedia', 'Baik'),
('BRG-312', 28, 'Tersedia', 'Rusak Berat'),
('BRG-313', 28, 'Tersedia', 'Baik'),
('BRG-314', 28, 'Tersedia', 'Baik'),
('BRG-315', 28, 'Tersedia', 'Baik'),
('BRG-316', 28, 'Tersedia', 'Baik'),
('BRG-317', 28, 'Tersedia', 'Baik'),
('BRG-318', 28, 'Tersedia', 'Baik'),
('BRG-319', 28, 'Tersedia', 'Baik'),
('BRG-320', 29, 'Tersedia', 'Baik'),
('BRG-321', 29, 'Tersedia', 'Baik'),
('BRG-322', 29, 'Tersedia', 'Baik'),
('BRG-323', 29, 'Tersedia', 'Baik'),
('BRG-324', 29, 'Tersedia', 'Baik'),
('BRG-325', 29, 'Tersedia', 'Baik'),
('BRG-326', 29, 'Tersedia', 'Baik'),
('BRG-327', 29, 'Tersedia', 'Baik'),
('BRG-328', 29, 'Tersedia', 'Baik'),
('BRG-329', 29, 'Tersedia', 'Baik'),
('BRG-330', 30, 'Tersedia', 'Baik'),
('BRG-331', 30, 'Tersedia', 'Baik'),
('BRG-332', 30, 'Tersedia', 'Rusak Ringan'),
('BRG-333', 30, 'Tersedia', 'Baik'),
('BRG-334', 30, 'Tersedia', 'Baik'),
('BRG-335', 30, 'Tersedia', 'Baik'),
('BRG-336', 30, 'Tersedia', 'Baik'),
('BRG-337', 30, 'Tersedia', 'Baik'),
('BRG-338', 30, 'Tersedia', 'Baik'),
('BRG-339', 30, 'Tersedia', 'Baik'),
('BRG-340', 30, 'Tersedia', 'Baik'),
('BRG-341', 30, 'Tersedia', 'Baik'),
('BRG-342', 30, 'Tersedia', 'Baik'),
('BRG-343', 30, 'Tersedia', 'Baik'),
('BRG-344', 30, 'Tersedia', 'Baik'),
('BRG-345', 31, 'Tersedia', 'Baik'),
('BRG-346', 32, 'Tersedia', 'Baik'),
('BRG-347', 33, 'Tersedia', 'Baik'),
('BRG-348', 34, 'Tersedia', 'Baik'),
('BRG-349', 35, 'Tersedia', 'Baik'),
('BRG-350', 36, 'Tersedia', 'Baik'),
('BRG-351', 37, 'Tersedia', 'Baik'),
('BRG-352', 37, 'Tersedia', 'Baik'),
('BRG-353', 37, 'Tersedia', 'Baik'),
('BRG-354', 37, 'Tersedia', 'Baik'),
('BRG-355', 37, 'Tersedia', 'Baik'),
('BRG-356', 38, 'Tersedia', 'Baik'),
('BRG-357', 38, 'Tersedia', 'Baik'),
('BRG-358', 38, 'Tersedia', 'Baik'),
('BRG-359', 38, 'Tersedia', 'Baik'),
('BRG-360', 38, 'Tersedia', 'Baik'),
('BRG-361', 38, 'Tersedia', 'Baik'),
('BRG-362', 38, 'Tersedia', 'Baik'),
('BRG-363', 38, 'Tersedia', 'Baik'),
('BRG-364', 38, 'Tersedia', 'Baik'),
('BRG-365', 38, 'Tersedia', 'Baik'),
('BRG-366', 39, 'Tersedia', 'Baik'),
('BRG-367', 39, 'Tersedia', 'Baik'),
('BRG-368', 39, 'Tersedia', 'Baik'),
('BRG-369', 39, 'Tersedia', 'Baik'),
('BRG-370', 39, 'Tersedia', 'Baik'),
('BRG-371', 39, 'Tersedia', 'Baik'),
('BRG-372', 39, 'Tersedia', 'Baik'),
('BRG-373', 39, 'Tersedia', 'Baik'),
('BRG-374', 39, 'Tersedia', 'Baik'),
('BRG-375', 39, 'Tersedia', 'Baik'),
('BRG-376', 40, 'Tersedia', 'Baik'),
('BRG-377', 40, 'Tersedia', 'Baik'),
('BRG-378', 40, 'Tersedia', 'Baik'),
('BRG-379', 40, 'Tersedia', 'Baik'),
('BRG-380', 40, 'Tersedia', 'Baik'),
('BRG-381', 41, 'Tersedia', 'Baik'),
('BRG-382', 41, 'Tersedia', 'Baik'),
('BRG-383', 41, 'Tersedia', 'Baik'),
('BRG-384', 41, 'Tidak Tersedia', 'Rusak Berat'),
('BRG-385', 41, 'Tersedia', 'Baik'),
('BRG-386', 41, 'Tersedia', 'Baik'),
('BRG-387', 41, 'Tersedia', 'Baik'),
('BRG-388', 41, 'Tersedia', 'Baik'),
('BRG-389', 41, 'Tersedia', 'Baik'),
('BRG-390', 41, 'Tersedia', 'Baik'),
('BRG-391', 41, 'Tersedia', 'Baik'),
('BRG-392', 41, 'Tersedia', 'Baik'),
('BRG-393', 41, 'Tersedia', 'Baik'),
('BRG-394', 41, 'Tersedia', 'Baik'),
('BRG-395', 41, 'Tersedia', 'Baik'),
('BRG-396', 41, 'Tersedia', 'Baik'),
('BRG-397', 41, 'Tersedia', 'Baik'),
('BRG-398', 41, 'Tersedia', 'Baik'),
('BRG-399', 41, 'Tidak Tersedia', 'Rusak Ringan'),
('BRG-400', 41, 'Tersedia', 'Baik'),
('BRG-401', 42, 'Tersedia', 'Baik'),
('BRG-402', 42, 'Tersedia', 'Baik'),
('BRG-403', 42, 'Tersedia', 'Baik'),
('BRG-404', 42, 'Tersedia', 'Baik'),
('BRG-405', 42, 'Tersedia', 'Baik'),
('BRG-406', 42, 'Tersedia', 'Rusak Berat'),
('BRG-407', 42, 'Tersedia', 'Baik'),
('BRG-408', 42, 'Tersedia', 'Baik'),
('BRG-409', 42, 'Tersedia', 'Baik'),
('BRG-410', 42, 'Tersedia', 'Baik'),
('BRG-411', 43, 'Tersedia', 'Rusak Berat'),
('BRG-412', 43, 'Tersedia', 'Baik'),
('BRG-413', 43, 'Tersedia', 'Baik'),
('BRG-414', 43, 'Tersedia', 'Baik'),
('BRG-415', 43, 'Tersedia', 'Baik'),
('BRG-416', 43, 'Tersedia', 'Baik'),
('BRG-417', 43, 'Tersedia', 'Baik'),
('BRG-418', 43, 'Tersedia', 'Rusak Berat'),
('BRG-419', 43, 'Tersedia', 'Baik'),
('BRG-420', 43, 'Tersedia', 'Baik'),
('BRG-421', 43, 'Tersedia', 'Baik'),
('BRG-422', 43, 'Tersedia', 'Baik'),
('BRG-423', 43, 'Tersedia', 'Baik'),
('BRG-424', 43, 'Tersedia', 'Baik'),
('BRG-425', 43, 'Tersedia', 'Baik'),
('BRG-426', 43, 'Tersedia', 'Baik'),
('BRG-427', 43, 'Tersedia', 'Baik'),
('BRG-428', 43, 'Tersedia', 'Baik'),
('BRG-429', 43, 'Tersedia', 'Baik'),
('BRG-430', 43, 'Tersedia', 'Baik'),
('BRG-431', 43, 'Tersedia', 'Baik'),
('BRG-432', 43, 'Tersedia', 'Baik'),
('BRG-433', 43, 'Tersedia', 'Baik'),
('BRG-434', 43, 'Tersedia', 'Baik'),
('BRG-435', 43, 'Tersedia', 'Baik'),
('BRG-436', 43, 'Tersedia', 'Baik'),
('BRG-437', 43, 'Tersedia', 'Baik'),
('BRG-438', 43, 'Tersedia', 'Baik'),
('BRG-439', 43, 'Tersedia', 'Baik'),
('BRG-440', 43, 'Tersedia', 'Baik'),
('BRG-441', 44, 'Tersedia', 'Baik'),
('BRG-442', 44, 'Tersedia', 'Baik'),
('BRG-443', 44, 'Tersedia', 'Baik'),
('BRG-444', 44, 'Tersedia', 'Baik'),
('BRG-445', 44, 'Tersedia', 'Rusak Berat'),
('BRG-446', 44, 'Tersedia', 'Baik'),
('BRG-447', 44, 'Tersedia', 'Rusak Ringan'),
('BRG-448', 44, 'Tersedia', 'Baik'),
('BRG-449', 44, 'Tersedia', 'Baik'),
('BRG-450', 44, 'Tersedia', 'Baik'),
('BRG-451', 44, 'Tersedia', 'Baik'),
('BRG-452', 44, 'Tersedia', 'Baik'),
('BRG-453', 44, 'Tersedia', 'Baik'),
('BRG-454', 44, 'Tersedia', 'Baik'),
('BRG-455', 44, 'Tersedia', 'Baik'),
('BRG-456', 44, 'Tersedia', 'Baik'),
('BRG-457', 44, 'Tersedia', 'Baik'),
('BRG-458', 44, 'Tersedia', 'Baik'),
('BRG-459', 44, 'Tersedia', 'Baik'),
('BRG-460', 44, 'Tersedia', 'Baik'),
('BRG-461', 45, 'Tersedia', 'Baik'),
('BRG-462', 45, 'Tersedia', 'Rusak Ringan'),
('BRG-463', 45, 'Tersedia', 'Rusak Ringan'),
('BRG-464', 46, 'Tersedia', 'Baik'),
('BRG-465', 46, 'Tersedia', 'Baik'),
('BRG-466', 46, 'Tersedia', 'Baik'),
('BRG-467', 46, 'Tersedia', 'Baik'),
('BRG-468', 46, 'Tersedia', 'Baik'),
('BRG-469', 47, 'Tersedia', 'Baik'),
('BRG-470', 47, 'Tersedia', 'Baik'),
('BRG-471', 47, 'Tersedia', 'Baik'),
('BRG-472', 47, 'Tersedia', 'Baik'),
('BRG-473', 47, 'Tersedia', 'Baik'),
('BRG-474', 47, 'Tersedia', 'Baik'),
('BRG-475', 47, 'Tersedia', 'Baik'),
('BRG-476', 47, 'Tersedia', 'Baik'),
('BRG-477', 47, 'Tersedia', 'Baik'),
('BRG-478', 47, 'Tersedia', 'Baik'),
('BRG-479', 47, 'Tersedia', 'Baik'),
('BRG-480', 47, 'Tersedia', 'Baik'),
('BRG-481', 47, 'Tersedia', 'Baik'),
('BRG-482', 47, 'Tersedia', 'Baik'),
('BRG-483', 47, 'Tersedia', 'Baik'),
('BRG-484', 48, 'Tersedia', 'Baik'),
('BRG-485', 48, 'Tersedia', 'Baik'),
('BRG-486', 48, 'Tersedia', 'Baik'),
('BRG-487', 48, 'Tersedia', 'Baik'),
('BRG-488', 48, 'Tersedia', 'Baik'),
('BRG-489', 49, 'Tersedia', 'Baik'),
('BRG-490', 49, 'Tersedia', 'Baik'),
('BRG-491', 49, 'Tersedia', 'Baik'),
('BRG-492', 49, 'Tersedia', 'Hilang'),
('BRG-493', 49, 'Tersedia', 'Baik'),
('BRG-494', 49, 'Tersedia', 'Baik'),
('BRG-495', 49, 'Tersedia', 'Baik'),
('BRG-496', 49, 'Tersedia', 'Baik'),
('BRG-497', 49, 'Tersedia', 'Baik'),
('BRG-498', 49, 'Tersedia', 'Baik'),
('BRG-499', 49, 'Tersedia', 'Baik'),
('BRG-500', 49, 'Tersedia', 'Baik'),
('BRG-501', 49, 'Tersedia', 'Baik'),
('BRG-502', 49, 'Tersedia', 'Baik'),
('BRG-503', 49, 'Tersedia', 'Baik'),
('BRG-504', 50, 'Tersedia', 'Baik'),
('BRG-505', 50, 'Tersedia', 'Baik'),
('BRG-506', 50, 'Tersedia', 'Baik'),
('BRG-507', 50, 'Tersedia', 'Baik'),
('BRG-508', 50, 'Tersedia', 'Baik'),
('BRG-509', 50, 'Tersedia', 'Baik'),
('BRG-510', 50, 'Tersedia', 'Baik'),
('BRG-511', 50, 'Tersedia', 'Baik'),
('BRG-512', 50, 'Tersedia', 'Baik'),
('BRG-513', 50, 'Tersedia', 'Baik'),
('BRG-514', 51, 'Tersedia', 'Baik'),
('BRG-515', 51, 'Tersedia', 'Baik'),
('BRG-516', 51, 'Tersedia', 'Baik'),
('BRG-517', 51, 'Tersedia', 'Baik'),
('BRG-518', 51, 'Tersedia', 'Baik'),
('BRG-519', 52, 'Tersedia', 'Baik'),
('BRG-520', 52, 'Tersedia', 'Baik'),
('BRG-521', 52, 'Tersedia', 'Baik'),
('BRG-522', 52, 'Tersedia', 'Baik'),
('BRG-523', 52, 'Tersedia', 'Baik'),
('BRG-524', 52, 'Tersedia', 'Baik'),
('BRG-525', 52, 'Tersedia', 'Baik'),
('BRG-526', 52, 'Tersedia', 'Baik'),
('BRG-527', 52, 'Tersedia', 'Baik'),
('BRG-528', 52, 'Tersedia', 'Baik'),
('BRG-529', 53, 'Tersedia', 'Baik'),
('BRG-530', 53, 'Tersedia', 'Baik'),
('BRG-531', 53, 'Tersedia', 'Rusak Ringan'),
('BRG-532', 53, 'Tersedia', 'Baik'),
('BRG-533', 53, 'Tersedia', 'Baik'),
('BRG-534', 54, 'Tersedia', 'Baik'),
('BRG-535', 54, 'Tersedia', 'Baik'),
('BRG-536', 54, 'Tersedia', 'Baik'),
('BRG-537', 54, 'Tersedia', 'Baik'),
('BRG-538', 54, 'Tersedia', 'Baik'),
('BRG-539', 54, 'Tersedia', 'Baik'),
('BRG-540', 54, 'Tersedia', 'Baik'),
('BRG-541', 54, 'Tersedia', 'Baik'),
('BRG-542', 54, 'Tersedia', 'Baik'),
('BRG-543', 54, 'Tersedia', 'Baik'),
('BRG-544', 54, 'Tersedia', 'Baik'),
('BRG-545', 54, 'Tersedia', 'Baik'),
('BRG-546', 54, 'Tersedia', 'Baik'),
('BRG-547', 54, 'Tersedia', 'Baik'),
('BRG-548', 54, 'Tersedia', 'Baik'),
('BRG-549', 57, 'Tersedia', 'Baik'),
('BRG-550', 57, 'Tersedia', 'Baik'),
('BRG-551', 57, 'Tersedia', 'Baik'),
('BRG-552', 57, 'Tersedia', 'Rusak Berat'),
('BRG-553', 57, 'Tersedia', 'Baik'),
('BRG-554', 57, 'Tersedia', 'Baik'),
('BRG-555', 57, 'Tersedia', 'Baik'),
('BRG-556', 57, 'Tersedia', 'Baik'),
('BRG-557', 57, 'Tersedia', 'Baik'),
('BRG-558', 57, 'Tersedia', 'Baik'),
('BRG-559', 57, 'Tersedia', 'Baik'),
('BRG-560', 57, 'Tersedia', 'Baik'),
('BRG-561', 57, 'Tersedia', 'Baik'),
('BRG-562', 57, 'Tersedia', 'Baik'),
('BRG-563', 57, 'Tersedia', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_header_barang`
--

CREATE TABLE `tbl_header_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `stok_tersedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_header_barang`
--

INSERT INTO `tbl_header_barang` (`id`, `nama_barang`, `stok_barang`, `stok_tersedia`) VALUES
(10, 'Body Hernest Single Hook ', 70, 69),
(11, 'Concrete Mixer DEUTZ  ', 7, 7),
(12, 'Gerobak Dorong Artco ', 15, 15),
(13, 'Gerobak Dorong Stayvic ', 10, 10),
(14, 'Handphone Samsung A10 ', 1, 1),
(15, 'Handphone Vivo Y20S ', 2, 1),
(16, 'Handy Talky iCom ', 25, 25),
(17, 'Helm Safety Proyek ', 50, 50),
(18, 'Hoist Electric PA 200 (12M) ', 25, 25),
(19, 'InFocus IN222 ', 5, 4),
(20, 'Jas Safety Proyek ', 50, 50),
(21, 'Laptop Acer Aspire Z476-31TB-007 ', 2, 2),
(22, 'Laptop ASUS VivoBook 14 X420UA ', 1, 1),
(23, 'Laptop Hp Elitebook 2760p ', 1, 1),
(24, 'Megaphone Fleco HW 20R ', 10, 10),
(25, 'Megaphone Fleco YC-130RU ', 5, 5),
(26, 'Mesin Bor Kenmaster Bor Cordless Drill KM-48', 15, 15),
(27, 'Meteran Gulung ', 15, 15),
(28, 'Meteran Jangka Sorong ', 10, 10),
(29, 'Meteran Penggaris ', 10, 10),
(30, 'Meteran Tangan ', 15, 14),
(31, 'Mobil Avanza 1.3 EAT ', 1, 1),
(32, 'Mobil Avanza 1.5 G MT', 1, 1),
(33, 'Mobil Colt Diesel 120 SS ', 1, 1),
(34, 'Mobil Pick Up Box Gran Max ', 1, 1),
(35, 'Motor Honda Beat CBS ESP ', 1, 1),
(36, 'Motor Suprafit tahun 2008 ', 1, 1),
(37, 'Obeng Elektrik ', 5, 5),
(38, 'Obeng Kembang ', 10, 10),
(39, 'Obeng Pipih ', 10, 10),
(40, 'Obeng Ratchet ', 5, 5),
(41, 'Obeng Taspen ', 20, 18),
(42, 'Overhead Projector Epson EB-X9 ', 10, 10),
(43, 'Sepatu Boots Karet ', 30, 30),
(44, 'Sepatu Safety Krisbow ', 20, 20),
(45, 'Tang Ampere ', 3, 3),
(46, 'Tang Crimping ', 5, 5),
(47, 'Tang Cucut ', 15, 15),
(48, 'Tang KakaTua ', 5, 5),
(49, 'Tang Kombinasi ', 15, 15),
(50, 'Tang Potong ', 10, 10),
(51, 'Tang Press Skun ', 5, 5),
(52, 'Tang Snap Ring ', 10, 10),
(53, 'Toolkit Set R DEER Tools', 5, 5),
(54, 'Toolkit Set Stanley 90-569N-23 ', 15, 15),
(57, 'Mikro Meter', 15, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `kode_jabatan` varchar(20) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`kode_jabatan`, `nama_jabatan`) VALUES
('JBN-001', 'Direktur'),
('JBN-002', 'Karyawan Kantor'),
('JBN-003', 'Karyawan Lapangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `kode_karyawan` varchar(12) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `jk` set('Laki-Laki','Perempuan') NOT NULL,
  `kode_jabatan` varchar(12) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`kode_karyawan`, `nama_karyawan`, `jk`, `kode_jabatan`, `no_hp`) VALUES
('KYN-001', 'Ari Prima S.Kom', 'Laki-Laki', 'JBN-002', '081364617461'),
('KYN-002', 'Putra Handes Mulfi', 'Laki-Laki', 'JBN-002', '082267362411'),
('KYN-003', 'Aldi', 'Laki-Laki', 'JBN-002', '082345623489'),
('KYN-004', 'Yayu Yulia', 'Perempuan', 'JBN-002', '081256092367'),
('KYN-005', 'Mia Herlina', 'Perempuan', 'JBN-002', '081356340912'),
('KYN-006', 'Pradito A.P', 'Laki-Laki', 'JBN-002', '081234523789'),
('KYN-007', 'Reni Agustine', 'Perempuan', 'JBN-002', '082234590786'),
('KYN-008', 'Hendra Widodo', 'Laki-Laki', 'JBN-003', '081245677899'),
('KYN-009', 'Riki Ricardo', 'Laki-Laki', 'JBN-003', '082245332222'),
('KYN-010', 'Bobi Eka Putra', 'Laki-Laki', 'JBN-003', '082245670982'),
('KYN-011', 'Winda Lismaini', 'Perempuan', 'JBN-003', '082267550897'),
('KYN-012', 'Hengky', 'Laki-Laki', 'JBN-003', '081222340895'),
('KYN-013', 'Gustia Arlena', 'Perempuan', 'JBN-003', '083186783450'),
('KYN-014', 'Indra Syafaat', 'Laki-Laki', 'JBN-003', '087834526790'),
('KYN-015', 'Novrizal', 'Laki-Laki', 'JBN-003', '081934667781'),
('KYN-016', 'Surya Abdillah', 'Laki-Laki', 'JBN-003', '081287699034'),
('KYN-017', 'Endi Suhendi', 'Laki-Laki', 'JBN-003', '082245655780'),
('KYN-018', 'Asep Septiandi', 'Laki-Laki', 'JBN-003', '081922340987'),
('KYN-019', 'Immanudin', 'Laki-Laki', 'JBN-003', '081376893345'),
('KYN-020', 'Gustaf Muhammad', 'Laki-Laki', 'JBN-003', '0813671543826'),
('KYN-021', 'Sadly Jaya M', 'Laki-Laki', 'JBN-002', '082367263888'),
('KYN-022', 'Muhammad Marzuki', 'Laki-Laki', 'JBN-002', '081377779025'),
('KYN-023', 'Ali Imron', 'Laki-Laki', 'JBN-002', '081267350009'),
('KYN-024', 'Hamzah S', 'Laki-Laki', 'JBN-002', '081987365483'),
('KYN-025', 'Eko Yulianto', 'Laki-Laki', 'JBN-003', '0812673523926'),
('KYN-026', 'Mulliadi', 'Laki-Laki', 'JBN-001', '081363381653'),
('KYN-027', 'nabila', 'Perempuan', 'JBN-002', '082345623489'),
('KYN-028', 'Fahrul Rozi', 'Laki-Laki', 'JBN-003', '082345623489');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_naive_bayes`
--

CREATE TABLE `tbl_naive_bayes` (
  `id` int(11) NOT NULL,
  `kode_karyawan` varchar(12) NOT NULL,
  `kode_barang` varchar(12) NOT NULL,
  `kode_pengembalian` varchar(12) NOT NULL,
  `keterangan` set('Tidak Dipinjamkan','Dipinjamkan') NOT NULL,
  `jumlah_pengembalian` double NOT NULL,
  `jumlah_pengembalian_dipinjamkan` int(11) NOT NULL,
  `jumlah_pengembalian_tidak_dipinjamkan` int(11) NOT NULL,
  `jumlah_pengembalian_dipinjamkan_jabatan` int(11) NOT NULL,
  `jumlah_pengembalian_tidak_dipinjamkan_jabatan` int(11) NOT NULL,
  `jumlah_pengembalian_dipinjamkan_sanksi` int(11) NOT NULL,
  `jumlah_pengembalian_tidak_dipinjamkan_sanksi` int(11) NOT NULL,
  `jumlah_pengembalian_dipinjamkan_kondisi` int(11) NOT NULL,
  `jumlah_pengembalian_tidak_dipinjamkan_kondisi` int(11) NOT NULL,
  `jumlah_pengembalian_dipinjamkan_terlambat` int(11) NOT NULL,
  `jumlah_pengembalian_tidak_dipinjamkan_terlambat` int(11) NOT NULL,
  `hitung_pengembalian_dipinjamkan` double NOT NULL,
  `hitung_pengembalian_tidak_dipinjamkan` double NOT NULL,
  `hitung_pengembalian_dipinjamkan_jabatan` double NOT NULL,
  `hitung_pengembalian_dipinjamkan_sanksi` double NOT NULL,
  `hitung_pengembalian_dipinjamkan_kondisi` double NOT NULL,
  `hitung_pengembalian_dipinjamkan_terlambat` double NOT NULL,
  `hitung_pengembalian_tidak_dipinjamkan_jabatan` double NOT NULL,
  `hitung_pengembalian_tidak_dipinjamkan_sanksi` double NOT NULL,
  `hitung_pengembalian_tidak_dipinjamkan_kondisi` double NOT NULL,
  `hitung_pengembalian_tidak_dipinjamkan_terlambat` double NOT NULL,
  `hasil_hitung_dipinjamkan` double NOT NULL,
  `hasil_hitung_tidak_dipinjamkan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_naive_bayes`
--

INSERT INTO `tbl_naive_bayes` (`id`, `kode_karyawan`, `kode_barang`, `kode_pengembalian`, `keterangan`, `jumlah_pengembalian`, `jumlah_pengembalian_dipinjamkan`, `jumlah_pengembalian_tidak_dipinjamkan`, `jumlah_pengembalian_dipinjamkan_jabatan`, `jumlah_pengembalian_tidak_dipinjamkan_jabatan`, `jumlah_pengembalian_dipinjamkan_sanksi`, `jumlah_pengembalian_tidak_dipinjamkan_sanksi`, `jumlah_pengembalian_dipinjamkan_kondisi`, `jumlah_pengembalian_tidak_dipinjamkan_kondisi`, `jumlah_pengembalian_dipinjamkan_terlambat`, `jumlah_pengembalian_tidak_dipinjamkan_terlambat`, `hitung_pengembalian_dipinjamkan`, `hitung_pengembalian_tidak_dipinjamkan`, `hitung_pengembalian_dipinjamkan_jabatan`, `hitung_pengembalian_dipinjamkan_sanksi`, `hitung_pengembalian_dipinjamkan_kondisi`, `hitung_pengembalian_dipinjamkan_terlambat`, `hitung_pengembalian_tidak_dipinjamkan_jabatan`, `hitung_pengembalian_tidak_dipinjamkan_sanksi`, `hitung_pengembalian_tidak_dipinjamkan_kondisi`, `hitung_pengembalian_tidak_dipinjamkan_terlambat`, `hasil_hitung_dipinjamkan`, `hasil_hitung_tidak_dipinjamkan`) VALUES
(86, 'KYN-023', 'BRG-263', 'PGA-001', 'Dipinjamkan', 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0),
(87, 'KYN-018', 'BRG-332', 'PGA-002', 'Tidak Dipinjamkan', 2, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 0.5, 0.5, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0.5),
(88, 'KYN-015', 'BRG-366', 'PGA-003', 'Dipinjamkan', 3, 2, 1, 1, 1, 2, 0, 2, 0, 2, 1, 0.66666666666667, 0.33333333333333, 0.5, 1, 1, 1, 1, 0, 0, 1, 0.33333333333333, 0),
(89, 'KYN-003', 'BRG-402', 'PGA-004', 'Dipinjamkan', 4, 3, 1, 2, 0, 3, 0, 3, 0, 3, 1, 0.75, 0.25, 0.66666666666667, 1, 1, 1, 0, 0, 0, 1, 0.5, 0),
(90, 'KYN-011', 'BRG-412', 'PGA-005', 'Dipinjamkan', 5, 4, 1, 2, 1, 4, 0, 4, 0, 4, 1, 0.8, 0.2, 0.5, 1, 1, 1, 1, 0, 0, 1, 0.4, 0),
(91, 'KYN-016', 'BRG-079', 'PGA-006', 'Dipinjamkan', 6, 5, 1, 3, 1, 5, 0, 5, 0, 5, 1, 0.83333333333333, 0.16666666666667, 0.6, 1, 1, 1, 1, 0, 0, 1, 0.5, 0),
(92, 'KYN-017', 'BRG-384', 'PGA-007', 'Tidak Dipinjamkan', 7, 5, 2, 3, 2, 0, 2, 0, 1, 5, 2, 0.71428571428571, 0.28571428571429, 0.6, 0, 0, 1, 1, 1, 0.5, 1, 0, 0.14285714285714),
(93, 'KYN-019', 'BRG-106', 'PGA-008', 'Dipinjamkan', 8, 6, 2, 4, 2, 6, 0, 6, 0, 6, 1, 0.75, 0.25, 0.66666666666667, 1, 1, 1, 1, 0, 0, 0.5, 0.5, 0),
(94, 'KYN-002', 'BRG-103', 'PGA-009', 'Dipinjamkan', 9, 7, 2, 3, 0, 1, 2, 7, 0, 7, 1, 0.77777777777778, 0.22222222222222, 0.42857142857143, 0.14285714285714, 1, 1, 0, 1, 0, 0.5, 0.047619047619048, 0),
(95, 'KYN-011', 'BRG-212', 'PGA-010', 'Dipinjamkan', 10, 8, 2, 5, 2, 7, 0, 8, 0, 7, 1, 0.8, 0.2, 0.625, 0.875, 1, 0.875, 1, 0, 0, 0.5, 0.3828125, 0),
(96, 'KYN-006', 'BRG-207', 'PGA-011', 'Dipinjamkan', 11, 9, 2, 4, 0, 8, 0, 9, 0, 8, 1, 0.81818181818182, 0.18181818181818, 0.44444444444444, 0.88888888888889, 1, 0.88888888888889, 0, 0, 0, 0.5, 0.28731762065095, 0),
(97, 'KYN-024', 'BRG-264', 'PGA-012', 'Dipinjamkan', 12, 10, 2, 5, 0, 9, 0, 10, 0, 9, 1, 0.83333333333333, 0.16666666666667, 0.5, 0.9, 1, 0.9, 0, 0, 0, 0.5, 0.3375, 0),
(99, 'KYN-008', 'BRG-350', 'PGA-013', 'Tidak Dipinjamkan', 13, 10, 3, 5, 3, 1, 3, 10, 1, 9, 2, 0.76923076923077, 0.23076923076923, 0.5, 0.1, 1, 0.9, 1, 1, 0.33333333333333, 0.66666666666667, 0.034615384615385, 0.051282051282051),
(100, 'KYN-009', 'BRG-530', 'PGA-014', 'Dipinjamkan', 14, 11, 3, 6, 3, 10, 0, 11, 1, 10, 1, 0.78571428571429, 0.21428571428571, 0.54545454545455, 0.90909090909091, 1, 0.90909090909091, 1, 0, 0.33333333333333, 0.33333333333333, 0.35419126328217, 0),
(101, 'KYN-025', 'BRG-441', 'PGA-015', 'Dipinjamkan', 15, 12, 3, 7, 3, 11, 0, 12, 1, 11, 1, 0.8, 0.2, 0.58333333333333, 0.91666666666667, 1, 0.91666666666667, 1, 0, 0.33333333333333, 0.33333333333333, 0.39212962962963, 0),
(102, 'KYN-010', 'BRG-462', 'PGA-016', 'Dipinjamkan', 16, 13, 3, 8, 3, 12, 0, 13, 1, 12, 1, 0.8125, 0.1875, 0.61538461538462, 0.92307692307692, 1, 0.92307692307692, 1, 0, 0.33333333333333, 0.33333333333333, 0.42603550295858, 0),
(103, 'KYN-021', 'BRG-352', 'PGA-017', 'Dipinjamkan', 17, 14, 3, 6, 0, 13, 0, 14, 1, 13, 1, 0.82352941176471, 0.17647058823529, 0.42857142857143, 0.92857142857143, 1, 0.92857142857143, 0, 0, 0.33333333333333, 0.33333333333333, 0.30432172869148, 0),
(104, 'KYN-001', 'BRG-346', 'PGA-018', 'Tidak Dipinjamkan', 18, 14, 4, 6, 1, 1, 4, 0, 2, 13, 2, 0.77777777777778, 0.22222222222222, 0.42857142857143, 0.071428571428571, 0, 0.92857142857143, 0.25, 1, 0.5, 0.5, 0, 0.013888888888889),
(105, 'KYN-008', 'BRG-447', 'PGA-019', 'Dipinjamkan', 19, 15, 4, 9, 3, 14, 0, 1, 2, 14, 2, 0.78947368421053, 0.21052631578947, 0.6, 0.93333333333333, 0.066666666666667, 0.93333333333333, 0.75, 0, 0.5, 0.5, 0.027508771929825, 0),
(106, 'KYN-009', 'BRG-445', 'PGA-020', 'Tidak Dipinjamkan', 20, 15, 5, 9, 4, 1, 5, 0, 2, 14, 3, 0.75, 0.25, 0.6, 0.066666666666667, 0, 0.93333333333333, 0.8, 1, 0.4, 0.6, 0, 0.048),
(107, 'KYN-004', 'BRG-406', 'PGA-021', 'Tidak Dipinjamkan', 21, 15, 6, 6, 2, 1, 6, 0, 3, 14, 4, 0.71428571428571, 0.28571428571429, 0.4, 0.066666666666667, 0, 0.93333333333333, 0.33333333333333, 1, 0.5, 0.66666666666667, 0, 0.031746031746032),
(108, 'KYN-011', 'BRG-104', 'PGA-022', 'Tidak Dipinjamkan', 22, 15, 7, 9, 5, 1, 7, 0, 4, 14, 4, 0.68181818181818, 0.31818181818182, 0.6, 0.066666666666667, 0, 0.93333333333333, 0.71428571428571, 1, 0.57142857142857, 0.57142857142857, 0, 0.074211502782931),
(109, 'KYN-016', 'BRG-262', 'PGA-023', 'Dipinjamkan', 23, 16, 7, 10, 5, 2, 7, 15, 1, 15, 4, 0.69565217391304, 0.30434782608696, 0.625, 0.125, 0.9375, 0.9375, 0.71428571428571, 1, 0.14285714285714, 0.57142857142857, 0.047766644021739, 0.017746228926353),
(110, 'KYN-002', 'BRG-261', 'PGA-024', 'Tidak Dipinjamkan', 24, 16, 8, 6, 3, 2, 8, 0, 5, 14, 5, 0.66666666666667, 0.33333333333333, 0.375, 0.125, 0, 0.875, 0.375, 1, 0.625, 0.625, 0, 0.048828125),
(111, 'KYN-010', 'BRG-109', 'PGA-025', 'Dipinjamkan', 25, 17, 8, 11, 5, 15, 0, 2, 2, 15, 5, 0.68, 0.32, 0.64705882352941, 0.88235294117647, 0.11764705882353, 0.88235294117647, 0.625, 0, 0.25, 0.625, 0.040301241603908, 0),
(112, 'KYN-017', 'BRG-131', 'PGA-026', 'Tidak Dipinjamkan', 26, 17, 9, 11, 6, 2, 9, 0, 6, 14, 6, 0.65384615384615, 0.34615384615385, 0.64705882352941, 0.11764705882353, 0, 0.82352941176471, 0.66666666666667, 1, 0.66666666666667, 0.66666666666667, 0, 0.1025641025641),
(113, 'KYN-005', 'BRG-207', 'PGA-027', 'Tidak Dipinjamkan', 27, 17, 10, 6, 4, 2, 10, 0, 1, 14, 7, 0.62962962962963, 0.37037037037037, 0.35294117647059, 0.11764705882353, 0, 0.82352941176471, 0.4, 1, 0.1, 0.7, 0, 0.01037037037037),
(114, 'KYN-018', 'BRG-266', 'PGA-028', 'Dipinjamkan', 28, 18, 10, 12, 6, 16, 0, 16, 1, 15, 7, 0.64285714285714, 0.35714285714286, 0.66666666666667, 0.88888888888889, 0.88888888888889, 0.83333333333333, 0.6, 0, 0.1, 0.7, 0.28218694885362, 0),
(115, 'KYN-019', 'BRG-280', 'PGA-029', 'Dipinjamkan', 29, 19, 10, 13, 6, 17, 0, 17, 1, 16, 7, 0.6551724137931, 0.3448275862069, 0.68421052631579, 0.89473684210526, 0.89473684210526, 0.84210526315789, 0.6, 0, 0.1, 0.7, 0.30220550899649, 0),
(116, 'KYN-007', 'BRG-345', 'PGA-030', 'Tidak Dipinjamkan', 30, 19, 11, 6, 5, 2, 11, 2, 3, 15, 8, 0.63333333333333, 0.36666666666667, 0.31578947368421, 0.10526315789474, 0.10526315789474, 0.78947368421053, 0.45454545454545, 1, 0.27272727272727, 0.72727272727273, 0.0017495261699956, 0.033057851239669),
(130, 'KYN-013', 'BRG-211', 'PGA-031', 'Dipinjamkan', 31, 20, 11, 14, 6, 18, 0, 18, 1, 16, 7, 0.64516129032258, 0.35483870967742, 0.7, 0.9, 0.9, 0.8, 0.54545454545455, 0, 0.090909090909091, 0.63636363636364, 0.29264516129032, 0),
(131, 'KYN-016', 'BRG-106', 'PGA-032', 'Dipinjamkan', 32, 21, 11, 15, 6, 19, 0, 19, 1, 17, 7, 0.65625, 0.34375, 0.71428571428571, 0.9047619047619, 0.9047619047619, 0.80952380952381, 0.54545454545455, 0, 0.090909090909091, 0.63636363636364, 0.31062722708131, 0),
(132, 'KYN-010', 'BRG-107', 'PGA-033', 'Dipinjamkan', 33, 22, 11, 16, 6, 20, 0, 20, 1, 18, 7, 0.66666666666667, 0.33333333333333, 0.72727272727273, 0.90909090909091, 0.90909090909091, 0.81818181818182, 0.54545454545455, 0, 0.090909090909091, 0.63636363636364, 0.32784645857523, 0),
(149, 'KYN-017', 'BRG-267', 'PGA-034', 'Tidak Dipinjamkan', 34, 22, 12, 16, 7, 2, 12, 0, 7, 18, 8, 0.64705882352941, 0.35294117647059, 0.72727272727273, 0.090909090909091, 0, 0.81818181818182, 0.58333333333333, 1, 0.58333333333333, 0.66666666666667, 0, 0.080065359477124),
(150, 'KYN-018', 'BRG-282', 'PGA-035', 'Dipinjamkan', 35, 23, 12, 17, 7, 21, 0, 21, 1, 19, 7, 0.65714285714286, 0.34285714285714, 0.73913043478261, 0.91304347826087, 0.91304347826087, 0.82608695652174, 0.58333333333333, 0, 0.083333333333333, 0.58333333333333, 0.33449494534396, 0),
(151, 'KYN-006', 'BRG-463', 'PGA-036', 'Tidak Dipinjamkan', 36, 24, 12, 7, 5, 3, 12, 3, 3, 20, 7, 0.66666666666667, 0.33333333333333, 0.29166666666667, 0.125, 0.125, 0.83333333333333, 0.41666666666667, 1, 0.25, 0.58333333333333, 0.0025318287037037, 0.02025462962963),
(152, 'KYN-015', 'BRG-551', 'PGA-037', 'Dipinjamkan', 37, 25, 12, 18, 7, 22, 0, 22, 1, 20, 7, 0.67567567567568, 0.32432432432432, 0.72, 0.88, 0.88, 0.8, 0.58333333333333, 0, 0.083333333333333, 0.58333333333333, 0.30138810810811, 0),
(153, 'KYN-012', 'BRG-411', 'PGA-038', 'Tidak Dipinjamkan', 38, 25, 13, 18, 8, 3, 13, 0, 8, 20, 8, 0.65789473684211, 0.34210526315789, 0.72, 0.12, 0, 0.8, 0.61538461538462, 1, 0.61538461538462, 0.61538461538462, 0, 0.07972594207412),
(154, 'KYN-017', 'BRG-348', 'PGA-039', 'Dipinjamkan', 39, 26, 13, 19, 8, 23, 0, 23, 1, 21, 8, 0.66666666666667, 0.33333333333333, 0.73076923076923, 0.88461538461538, 0.88461538461538, 0.80769230769231, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.30792426735759, 0),
(155, 'KYN-011', 'BRG-134', 'PGA-040', 'Dipinjamkan', 40, 27, 13, 20, 8, 24, 0, 24, 1, 22, 8, 0.675, 0.325, 0.74074074074074, 0.88888888888889, 0.88888888888889, 0.81481481481481, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.32190214906264, 0),
(156, 'KYN-005', 'BRG-135', 'PGA-041', 'Dipinjamkan', 41, 28, 13, 8, 5, 25, 0, 25, 1, 23, 8, 0.68292682926829, 0.31707317073171, 0.28571428571429, 0.89285714285714, 0.89285714285714, 0.82142857142857, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.12777323472943, 0),
(157, 'KYN-010', 'BRG-094', 'PGA-042', 'Dipinjamkan', 42, 29, 13, 21, 8, 26, 0, 26, 1, 24, 8, 0.69047619047619, 0.30952380952381, 0.72413793103448, 0.89655172413793, 0.89655172413793, 0.82758620689655, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.33260896305712, 0),
(158, 'KYN-007', 'BRG-345', 'PGA-043', 'Dipinjamkan', 43, 30, 13, 9, 5, 4, 13, 27, 1, 24, 8, 0.69767441860465, 0.30232558139535, 0.3, 0.13333333333333, 0.9, 0.8, 0.38461538461538, 1, 0.076923076923077, 0.61538461538462, 0.020093023255814, 0.0055043346635475),
(159, 'KYN-006', 'BRG-004', 'PGA-044', 'Dipinjamkan', 44, 31, 13, 10, 5, 27, 0, 28, 1, 24, 8, 0.70454545454545, 0.29545454545455, 0.32258064516129, 0.87096774193548, 0.90322580645161, 0.7741935483871, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.13841886353719, 0),
(160, 'KYN-015', 'BRG-220', 'PGA-045', 'Dipinjamkan', 45, 32, 13, 22, 8, 28, 0, 29, 1, 25, 8, 0.71111111111111, 0.28888888888889, 0.6875, 0.875, 0.90625, 0.78125, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.30287000868056, 0),
(161, 'KYN-012', 'BRG-363', 'PGA-046', 'Dipinjamkan', 46, 33, 13, 23, 8, 29, 0, 30, 1, 26, 8, 0.71739130434783, 0.28260869565217, 0.6969696969697, 0.87878787878788, 0.90909090909091, 0.78787878787879, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.31471742215544, 0),
(162, 'KYN-014', 'BRG-280', 'PGA-047', 'Dipinjamkan', 47, 34, 13, 24, 8, 30, 0, 31, 1, 27, 8, 0.72340425531915, 0.27659574468085, 0.70588235294118, 0.88235294117647, 0.91176470588235, 0.79411764705882, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.32622958629082, 0),
(163, 'KYN-003', 'BRG-217', 'PGA-048', 'Dipinjamkan', 48, 35, 13, 11, 5, 31, 0, 32, 1, 28, 8, 0.72916666666667, 0.27083333333333, 0.31428571428571, 0.88571428571429, 0.91428571428571, 0.8, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.14846258503401, 0),
(164, 'KYN-005', 'BRG-264', 'PGA-049', 'Dipinjamkan', 49, 36, 13, 12, 5, 32, 0, 33, 1, 29, 8, 0.73469387755102, 0.26530612244898, 0.33333333333333, 0.88888888888889, 0.91666666666667, 0.80555555555556, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.1607457797934, 0),
(165, 'KYN-013', 'BRG-113', 'PGA-050', 'Dipinjamkan', 50, 37, 13, 25, 8, 33, 0, 34, 1, 29, 8, 0.74, 0.26, 0.67567567567568, 0.89189189189189, 0.91891891891892, 0.78378378378378, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.3211853197244, 0),
(172, 'KYN-021', 'BRG-132', 'PGA-051', 'Dipinjamkan', 51, 38, 13, 13, 5, 34, 0, 35, 1, 30, 8, 0.74509803921569, 0.25490196078431, 0.34210526315789, 0.89473684210526, 0.92105263157895, 0.78947368421053, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.16584050153084, 0),
(173, 'KYN-022', 'BRG-138', 'PGA-052', 'Dipinjamkan', 52, 39, 13, 14, 5, 35, 0, 36, 1, 31, 8, 0.75, 0.25, 0.35897435897436, 0.8974358974359, 0.92307692307692, 0.79487179487179, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.17728137436831, 0),
(174, 'KYN-024', 'BRG-218', 'PGA-053', 'Dipinjamkan', 53, 40, 13, 15, 5, 36, 0, 37, 1, 32, 8, 0.75471698113208, 0.24528301886792, 0.375, 0.9, 0.925, 0.8, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.18849056603774, 0),
(175, 'KYN-023', 'BRG-133', 'PGA-054', 'Dipinjamkan', 54, 41, 13, 16, 5, 37, 0, 38, 1, 33, 8, 0.75925925925926, 0.24074074074074, 0.39024390243902, 0.90243902439024, 0.92682926829268, 0.80487804878049, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.19946831235118, 0),
(176, 'KYN-004', 'BRG-139', 'PGA-055', 'Dipinjamkan', 55, 42, 13, 17, 5, 38, 0, 39, 1, 34, 8, 0.76363636363636, 0.23636363636364, 0.4047619047619, 0.9047619047619, 0.92857142857143, 0.80952380952381, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.21021586123627, 0),
(177, 'KYN-001', 'BRG-140', 'PGA-056', 'Dipinjamkan', 56, 43, 13, 18, 5, 39, 0, 40, 1, 35, 8, 0.76785714285714, 0.23214285714286, 0.41860465116279, 0.90697674418605, 0.93023255813953, 0.81395348837209, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.22073528117021, 0),
(178, 'KYN-003', 'BRG-145', 'PGA-057', 'Dipinjamkan', 57, 44, 13, 19, 5, 40, 0, 41, 1, 36, 8, 0.7719298245614, 0.2280701754386, 0.43181818181818, 0.90909090909091, 0.93181818181818, 0.81818181818182, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.23102930127724, 0),
(179, 'KYN-007', 'BRG-105', 'PGA-058', 'Dipinjamkan', 58, 45, 13, 20, 5, 41, 0, 42, 1, 37, 8, 0.77586206896552, 0.22413793103448, 0.44444444444444, 0.91111111111111, 0.93333333333333, 0.82222222222222, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.24110117780616, 0),
(180, 'KYN-001', 'BRG-349', 'PGA-059', 'Dipinjamkan', 59, 46, 13, 21, 5, 42, 0, 43, 1, 38, 8, 0.77966101694915, 0.22033898305085, 0.45652173913043, 0.91304347826087, 0.93478260869565, 0.82608695652174, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.25095458262346, 0),
(181, 'KYN-010', 'BRG-211', 'PGA-060', 'Dipinjamkan', 60, 47, 13, 26, 8, 43, 0, 44, 1, 39, 8, 0.78333333333333, 0.21666666666667, 0.5531914893617, 0.91489361702128, 0.93617021276596, 0.82978723404255, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.3079741483101, 0),
(182, 'KYN-025', 'BRG-212', 'PGA-061', 'Dipinjamkan', 61, 48, 13, 27, 8, 44, 0, 45, 1, 40, 8, 0.78688524590164, 0.21311475409836, 0.5625, 0.91666666666667, 0.9375, 0.83333333333333, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.31698258196721, 0),
(183, 'KYN-017', 'BRG-214', 'PGA-062', 'Dipinjamkan', 62, 49, 13, 28, 8, 45, 0, 46, 1, 41, 8, 0.79032258064516, 0.20967741935484, 0.57142857142857, 0.91836734693878, 0.93877551020408, 0.83673469387755, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.32578591485499, 0),
(184, 'KYN-011', 'BRG-404', 'PGA-063', 'Dipinjamkan', 63, 50, 13, 29, 8, 46, 0, 47, 1, 42, 8, 0.79365079365079, 0.20634920634921, 0.58, 0.92, 0.94, 0.84, 0.61538461538462, 0, 0.076923076923077, 0.61538461538462, 0.33438933333333, 0),
(185, 'KYN-023', 'BRG-531', 'PGA-064', 'Tidak Dipinjamkan', 64, 51, 13, 22, 5, 5, 13, 4, 3, 43, 8, 0.796875, 0.203125, 0.43137254901961, 0.098039215686275, 0.07843137254902, 0.84313725490196, 0.38461538461538, 1, 0.23076923076923, 0.61538461538462, 0.0022285923212038, 0.011094674556213),
(186, 'KYN-004', 'BRG-346', 'PGA-065', 'Dipinjamkan', 65, 52, 13, 23, 5, 47, 0, 48, 1, 44, 8, 0.8, 0.2, 0.44230769230769, 0.90384615384615, 0.92307692307692, 0.84615384615385, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.2498021777949, 0),
(187, 'KYN-022', 'BRG-330', 'PGA-066', 'Dipinjamkan', 66, 53, 13, 24, 5, 48, 0, 49, 1, 45, 8, 0.8030303030303, 0.1969696969697, 0.45283018867925, 0.90566037735849, 0.92452830188679, 0.84905660377358, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.25851725066513, 0),
(188, 'KYN-021', 'BRG-105', 'PGA-067', 'Dipinjamkan', 67, 54, 13, 25, 5, 49, 0, 50, 1, 46, 8, 0.80597014925373, 0.19402985074627, 0.46296296296296, 0.90740740740741, 0.92592592592593, 0.85185185185185, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.26705938377007, 0),
(189, 'KYN-022', 'BRG-350', 'PGA-068', 'Dipinjamkan', 68, 55, 13, 26, 5, 50, 0, 51, 1, 47, 8, 0.80882352941176, 0.19117647058824, 0.47272727272727, 0.90909090909091, 0.92727272727273, 0.85454545454545, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.27543200601052, 0),
(190, 'KYN-007', 'BRG-264', 'PGA-069', 'Dipinjamkan', 69, 56, 13, 27, 5, 51, 0, 52, 1, 47, 8, 0.81159420289855, 0.18840579710145, 0.48214285714286, 0.91071428571429, 0.92857142857143, 0.83928571428571, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.27772947300038, 0),
(191, 'KYN-023', 'BRG-417', 'PGA-070', 'Dipinjamkan', 70, 57, 13, 28, 5, 52, 0, 53, 1, 48, 8, 0.81428571428571, 0.18571428571429, 0.49122807017544, 0.91228070175439, 0.92982456140351, 0.84210526315789, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.28573002219306, 0),
(192, 'KYN-022', 'BRG-419', 'PGA-071', 'Dipinjamkan', 71, 58, 13, 29, 5, 53, 0, 54, 1, 49, 8, 0.8169014084507, 0.1830985915493, 0.5, 0.91379310344828, 0.93103448275862, 0.8448275862069, 0.38461538461538, 0, 0.076923076923077, 0.61538461538462, 0.29357656043275, 0),
(193, 'KYN-011', 'BRG-430', 'PGA-072', 'Dipinjamkan', 72, 58, 14, 29, 9, 5, 14, 54, 2, 49, 9, 0.80555555555556, 0.19444444444444, 0.5, 0.086206896551724, 0.93103448275862, 0.8448275862069, 0.64285714285714, 1, 0.14285714285714, 0.64285714285714, 0.027311236623068, 0.011479591836735),
(194, 'KYN-012', 'BRG-001', 'PGA-073', 'Dipinjamkan', 73, 59, 14, 30, 9, 54, 0, 55, 2, 50, 8, 0.80821917808219, 0.19178082191781, 0.50847457627119, 0.91525423728814, 0.93220338983051, 0.84745762711864, 0.64285714285714, 0, 0.14285714285714, 0.57142857142857, 0.29714526441493, 0),
(195, 'KYN-015', 'BRG-333', 'PGA-074', 'Dipinjamkan', 74, 60, 14, 31, 9, 55, 0, 56, 2, 51, 8, 0.81081081081081, 0.18918918918919, 0.51666666666667, 0.91666666666667, 0.93333333333333, 0.85, 0.64285714285714, 0, 0.14285714285714, 0.57142857142857, 0.30464714714715, 0),
(196, 'KYN-006', 'BRG-492', 'PGA-075', 'Tidak Dipinjamkan', 75, 60, 15, 29, 6, 5, 15, 0, 2, 51, 9, 0.8, 0.2, 0.48333333333333, 0.083333333333333, 0, 0.85, 0.4, 1, 0.13333333333333, 0.6, 0, 0.0064),
(197, 'KYN-004', 'BRG-157', 'PGA-076', 'Dipinjamkan', 76, 61, 15, 30, 6, 56, 0, 57, 2, 52, 9, 0.80263157894737, 0.19736842105263, 0.49180327868852, 0.91803278688525, 0.9344262295082, 0.85245901639344, 0.4, 0, 0.13333333333333, 0.6, 0.28865852207894, 0),
(198, 'KYN-003', 'BRG-159', 'PGA-077', 'Dipinjamkan', 77, 62, 15, 31, 6, 57, 0, 58, 2, 53, 9, 0.80519480519481, 0.19480519480519, 0.5, 0.91935483870968, 0.93548387096774, 0.85483870967742, 0.4, 0, 0.13333333333333, 0.6, 0.29598835087909, 0),
(199, 'KYN-018', 'BRG-429', 'PGA-078', 'Dipinjamkan', 78, 63, 15, 32, 9, 58, 0, 59, 2, 54, 9, 0.80769230769231, 0.19230769230769, 0.50793650793651, 0.92063492063492, 0.93650793650794, 0.85714285714286, 0.6, 0, 0.13333333333333, 0.6, 0.30318484740253, 0),
(200, 'KYN-014', 'BRG-312', 'PGA-079', 'Tidak Dipinjamkan', 79, 63, 16, 32, 10, 5, 16, 0, 9, 54, 10, 0.79746835443038, 0.20253164556962, 0.50793650793651, 0.079365079365079, 0, 0.85714285714286, 0.625, 1, 0.5625, 0.625, 0, 0.044501582278481),
(201, 'KYN-025', 'BRG-399', 'PGA-080', 'Tidak Dipinjamkan', 80, 63, 17, 32, 11, 5, 17, 4, 4, 54, 10, 0.7875, 0.2125, 0.50793650793651, 0.079365079365079, 0.063492063492063, 0.85714285714286, 0.64705882352941, 1, 0.23529411764706, 0.58823529411765, 0.001727675197063, 0.019031141868512),
(202, 'KYN-016', 'BRG-188', 'PGA-081', 'Dipinjamkan', 81, 64, 17, 33, 11, 59, 0, 60, 2, 55, 9, 0.79012345679012, 0.20987654320988, 0.515625, 0.921875, 0.9375, 0.859375, 0.64705882352941, 0, 0.11764705882353, 0.52941176470588, 0.30259026421441, 0),
(203, 'KYN-017', 'BRG-552', 'PGA-082', 'Tidak Dipinjamkan', 82, 64, 18, 33, 12, 5, 18, 0, 10, 55, 10, 0.78048780487805, 0.21951219512195, 0.515625, 0.078125, 0, 0.859375, 0.66666666666667, 1, 0.55555555555556, 0.55555555555556, 0, 0.04516711833785),
(204, 'KYN-011', 'BRG-115', 'PGA-083', 'Dipinjamkan', 83, 65, 18, 34, 12, 60, 0, 61, 2, 56, 10, 0.78313253012048, 0.21686746987952, 0.52307692307692, 0.92307692307692, 0.93846153846154, 0.86153846153846, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.30572423512895, 0),
(205, 'KYN-010', 'BRG-100', 'PGA-084', 'Dipinjamkan', 84, 66, 18, 35, 12, 61, 0, 62, 2, 57, 10, 0.78571428571429, 0.21428571428571, 0.53030303030303, 0.92424242424242, 0.93939393939394, 0.86363636363636, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.31243043381473, 0),
(206, 'KYN-009', 'BRG-348', 'PGA-085', 'Dipinjamkan', 85, 67, 18, 36, 12, 62, 0, 63, 2, 58, 10, 0.78823529411765, 0.21176470588235, 0.53731343283582, 0.92537313432836, 0.94029850746269, 0.86567164179104, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.31902109360683, 0),
(207, 'KYN-024', 'BRG-167', 'PGA-086', 'Dipinjamkan', 86, 68, 18, 32, 6, 63, 0, 64, 2, 59, 10, 0.7906976744186, 0.2093023255814, 0.47058823529412, 0.92647058823529, 0.94117647058824, 0.86764705882353, 0.33333333333333, 0, 0.11111111111111, 0.55555555555556, 0.28151226693301, 0),
(208, 'KYN-021', 'BRG-165', 'PGA-087', 'Dipinjamkan', 87, 69, 18, 33, 6, 64, 0, 65, 2, 60, 10, 0.79310344827586, 0.20689655172414, 0.47826086956522, 0.92753623188406, 0.94202898550725, 0.8695652173913, 0.33333333333333, 0, 0.11111111111111, 0.55555555555556, 0.28819868578628, 0),
(209, 'KYN-005', 'BRG-170', 'PGA-088', 'Dipinjamkan', 88, 70, 18, 34, 6, 65, 0, 66, 2, 61, 10, 0.79545454545455, 0.20454545454545, 0.48571428571429, 0.92857142857143, 0.94285714285714, 0.87142857142857, 0.33333333333333, 0, 0.11111111111111, 0.55555555555556, 0.29477405247813, 0),
(210, 'KYN-002', 'BRG-171', 'PGA-089', 'Dipinjamkan', 89, 71, 18, 35, 6, 66, 0, 67, 2, 62, 10, 0.79775280898876, 0.20224719101124, 0.49295774647887, 0.92957746478873, 0.94366197183099, 0.87323943661972, 0.33333333333333, 0, 0.11111111111111, 0.55555555555556, 0.30124054128201, 0),
(211, 'KYN-001', 'BRG-172', 'PGA-090', 'Dipinjamkan', 90, 72, 18, 36, 6, 67, 0, 68, 2, 63, 10, 0.8, 0.2, 0.5, 0.93055555555556, 0.94444444444444, 0.875, 0.33333333333333, 0, 0.11111111111111, 0.55555555555556, 0.30760030864198, 0),
(212, 'KYN-011', 'BRG-116', 'PGA-091', 'Dipinjamkan', 91, 73, 18, 37, 12, 68, 0, 69, 2, 64, 10, 0.8021978021978, 0.1978021978022, 0.50684931506849, 0.93150684931507, 0.94520547945205, 0.87671232876712, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.31385548929512, 0),
(213, 'KYN-014', 'BRG-117', 'PGA-092', 'Dipinjamkan', 92, 74, 18, 38, 12, 69, 0, 70, 2, 65, 10, 0.80434782608696, 0.19565217391304, 0.51351351351351, 0.93243243243243, 0.94594594594595, 0.87837837837838, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.32000819299943, 0),
(214, 'KYN-015', 'BRG-118', 'PGA-093', 'Dipinjamkan', 93, 75, 18, 39, 12, 70, 0, 71, 2, 66, 10, 0.80645161290323, 0.19354838709677, 0.52, 0.93333333333333, 0.94666666666667, 0.88, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.32606050179211, 0),
(215, 'KYN-018', 'BRG-119', 'PGA-094', 'Dipinjamkan', 94, 76, 18, 40, 12, 71, 0, 72, 2, 67, 10, 0.80851063829787, 0.19148936170213, 0.52631578947368, 0.93421052631579, 0.94736842105263, 0.88157894736842, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.33201446771287, 0),
(216, 'KYN-008', 'BRG-400', 'PGA-095', 'Dipinjamkan', 95, 77, 18, 41, 12, 72, 0, 73, 2, 68, 10, 0.81052631578947, 0.18947368421053, 0.53246753246753, 0.93506493506494, 0.94805194805195, 0.88311688311688, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.33787211093405, 0),
(217, 'KYN-008', 'BRG-461', 'PGA-096', 'Dipinjamkan', 96, 78, 18, 42, 12, 73, 0, 74, 2, 68, 10, 0.8125, 0.1875, 0.53846153846154, 0.93589743589744, 0.94871794871795, 0.87179487179487, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.33865519479425, 0),
(218, 'KYN-009', 'BRG-350', 'PGA-097', 'Dipinjamkan', 97, 79, 18, 43, 12, 74, 0, 75, 2, 68, 10, 0.81443298969072, 0.18556701030928, 0.54430379746835, 0.93670886075949, 0.94936708860759, 0.86075949367089, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.33932616066444, 0),
(219, 'KYN-012', 'BRG-420', 'PGA-098', 'Dipinjamkan', 98, 80, 18, 44, 12, 75, 0, 76, 2, 69, 10, 0.81632653061224, 0.18367346938776, 0.55, 0.9375, 0.95, 0.8625, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.3448899872449, 0),
(220, 'KYN-010', 'BRG-302', 'PGA-099', 'Dipinjamkan', 99, 81, 18, 45, 12, 76, 0, 77, 2, 70, 10, 0.81818181818182, 0.18181818181818, 0.55555555555556, 0.93827160493827, 0.95061728395062, 0.8641975308642, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.35036814999219, 0),
(221, 'KYN-014', 'BRG-380', 'PGA-100', 'Dipinjamkan', 100, 82, 18, 46, 12, 77, 0, 78, 2, 70, 10, 0.82, 0.18, 0.5609756097561, 0.9390243902439, 0.95121951219512, 0.85365853658537, 0.66666666666667, 0, 0.11111111111111, 0.55555555555556, 0.35075158514821, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `kode_peminjaman` varchar(12) NOT NULL,
  `kode_karyawan` varchar(12) NOT NULL,
  `kode_barang` varchar(12) NOT NULL,
  `tgl_pinjam` date NOT NULL DEFAULT current_timestamp(),
  `tgl_kembali` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `status` set('selesai','belum selesai') NOT NULL DEFAULT 'belum selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`kode_peminjaman`, `kode_karyawan`, `kode_barang`, `tgl_pinjam`, `tgl_kembali`, `keterangan`, `status`) VALUES
('PMJ-001', 'KYN-023', 'BRG-263', '2020-01-02', '2020-02-02', 'Keperluan Kantor', 'selesai'),
('PMJ-002', 'KYN-018', 'BRG-332', '2020-01-03', '2020-02-03', 'Keperluan Lapangan', 'selesai'),
('PMJ-003', 'KYN-015', 'BRG-366', '2020-02-05', '2020-03-05', 'Keperluan Lapangan', 'selesai'),
('PMJ-004', 'KYN-003', 'BRG-402', '2020-02-01', '2020-03-01', 'Keperluan Persentasi', 'selesai'),
('PMJ-005', 'KYN-011', 'BRG-412', '2020-02-10', '2020-06-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-006', 'KYN-016', 'BRG-079', '2020-04-10', '2020-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-007', 'KYN-017', 'BRG-384', '2020-04-10', '2020-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-008', 'KYN-019', 'BRG-106', '2020-04-10', '2020-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-009', 'KYN-002', 'BRG-103', '2020-04-17', '2020-05-17', 'Keperluan Kantor', 'selesai'),
('PMJ-010', 'KYN-011', 'BRG-212', '2020-04-10', '2020-06-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-011', 'KYN-006', 'BRG-207', '2020-04-28', '2020-05-28', 'Keperluan Persentasi', 'selesai'),
('PMJ-012', 'KYN-024', 'BRG-264', '2020-04-28', '2020-05-28', 'Keperluan Kantor', 'selesai'),
('PMJ-013', 'KYN-008', 'BRG-350', '2020-05-03', '2020-10-03', 'Keperluan Kantor', 'selesai'),
('PMJ-014', 'KYN-009', 'BRG-530', '2020-05-03', '2020-06-03', 'Keperluan Lapangan', 'selesai'),
('PMJ-015', 'KYN-025', 'BRG-441', '2020-05-03', '2020-09-03', 'Keperluan Lapangan', 'selesai'),
('PMJ-016', 'KYN-010', 'BRG-462', '2020-05-03', '2020-06-03', 'Keperluan Lapangan', 'selesai'),
('PMJ-017', 'KYN-021', 'BRG-352', '2020-05-10', '2020-06-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-018', 'KYN-001', 'BRG-346', '2020-06-02', '2020-08-02', 'Keperluan Kantor', 'selesai'),
('PMJ-019', 'KYN-008', 'BRG-447', '2020-06-02', '2020-07-02', 'Keperluan Lapangan', 'selesai'),
('PMJ-020', 'KYN-009', 'BRG-445', '2020-06-02', '2020-07-02', 'Keperluan Lapangan', 'selesai'),
('PMJ-021', 'KYN-004', 'BRG-406', '2020-06-02', '2020-07-02', 'Keperluan Persentasi', 'selesai'),
('PMJ-022', 'KYN-011', 'BRG-104', '2020-06-02', '2020-07-02', 'Keperluan Kantor', 'selesai'),
('PMJ-023', 'KYN-016', 'BRG-262', '2020-06-02', '2020-07-02', 'Keperluan Kantor', 'selesai'),
('PMJ-024', 'KYN-002', 'BRG-261', '2020-06-02', '2020-07-02', 'Keperluan Kantor', 'selesai'),
('PMJ-025', 'KYN-010', 'BRG-109', '2020-07-18', '2020-08-18', 'Keperluan Lapangan', 'selesai'),
('PMJ-026', 'KYN-017', 'BRG-131', '2020-07-18', '2020-08-18', 'Keperluan Lapangan', 'selesai'),
('PMJ-027', 'KYN-005', 'BRG-207', '2020-07-18', '2020-08-18', 'Keperluan Persentasi', 'selesai'),
('PMJ-028', 'KYN-018', 'BRG-266', '2020-07-19', '2020-08-19', 'Keperluan Lapangan', 'selesai'),
('PMJ-029', 'KYN-019', 'BRG-280', '2020-07-20', '2020-08-20', 'Keperluan Lapangan', 'selesai'),
('PMJ-030', 'KYN-007', 'BRG-345', '2020-07-21', '2020-10-21', 'Keperluan Kantor', 'selesai'),
('PMJ-031', 'KYN-013', 'BRG-211', '2019-05-08', '2019-06-08', 'Keperluan Lapangan', 'selesai'),
('PMJ-032', 'KYN-016', 'BRG-106', '2019-07-02', '2019-12-02', 'Keperluan Lapangan', 'selesai'),
('PMJ-033', 'KYN-010', 'BRG-107', '2019-07-02', '2019-12-02', 'Keperluan Lapangan', 'selesai'),
('PMJ-034', 'KYN-017', 'BRG-267', '2019-07-02', '2019-12-02', 'Keperluan Lapangan', 'selesai'),
('PMJ-035', 'KYN-018', 'BRG-282', '2019-07-05', '2019-12-05', 'Keperluan Lapangan', 'selesai'),
('PMJ-036', 'KYN-006', 'BRG-463', '2019-07-05', '2019-12-05', 'Keperluan Lapangan', 'selesai'),
('PMJ-037', 'KYN-015', 'BRG-551', '2019-07-05', '2019-12-05', 'Keperluan Lapangan', 'selesai'),
('PMJ-038', 'KYN-012', 'BRG-411', '2019-07-08', '2019-12-08', 'Keperluan Lapangan', 'selesai'),
('PMJ-039', 'KYN-017', 'BRG-348', '2019-08-20', '2019-12-20', 'Keperluan Kantor', 'selesai'),
('PMJ-040', 'KYN-011', 'BRG-134', '2019-09-02', '2019-12-02', 'Survey Lapangan', 'selesai'),
('PMJ-041', 'KYN-005', 'BRG-135', '2019-09-02', '2019-12-02', 'Survey Lapangan', 'selesai'),
('PMJ-042', 'KYN-010', 'BRG-094', '2019-09-15', '2019-12-15', 'Keperluan Lapangan', 'selesai'),
('PMJ-043', 'KYN-007', 'BRG-345', '2019-10-04', '2019-12-04', 'Keperluan Kantor', 'selesai'),
('PMJ-044', 'KYN-006', 'BRG-004', '2019-10-10', '2019-11-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-045', 'KYN-015', 'BRG-220', '2019-10-10', '2019-11-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-046', 'KYN-012', 'BRG-363', '2019-10-11', '2019-11-11', 'Keperluan Lapangan', 'selesai'),
('PMJ-047', 'KYN-014', 'BRG-280', '2019-10-12', '2019-11-12', 'Keperluan Lapangan', 'selesai'),
('PMJ-048', 'KYN-003', 'BRG-217', '2019-10-12', '2019-11-12', 'Keperluan Lapangan', 'selesai'),
('PMJ-049', 'KYN-005', 'BRG-264', '2019-11-06', '2019-12-06', 'Keperluan Kantor', 'selesai'),
('PMJ-050', 'KYN-013', 'BRG-113', '2019-11-11', '2019-12-11', 'Keperluan Lapangan', 'selesai'),
('PMJ-051', 'KYN-021', 'BRG-132', '2019-05-08', '2019-06-08', 'Survey Lapangan', 'selesai'),
('PMJ-052', 'KYN-022', 'BRG-138', '2019-05-06', '2019-06-06', 'Survey Lapangan', 'selesai'),
('PMJ-053', 'KYN-024', 'BRG-218', '2019-03-06', '2019-04-06', 'Keperluan Lapangan', 'selesai'),
('PMJ-054', 'KYN-023', 'BRG-133', '2019-03-06', '2019-04-06', 'Keperluan Lapangan', 'selesai'),
('PMJ-055', 'KYN-004', 'BRG-139', '2019-03-03', '2019-04-03', 'Survey Lapangan', 'selesai'),
('PMJ-056', 'KYN-001', 'BRG-140', '2019-03-03', '2019-04-03', 'Survey Lapangan', 'selesai'),
('PMJ-057', 'KYN-003', 'BRG-145', '2018-11-23', '2018-12-23', 'Survey Lapangan', 'selesai'),
('PMJ-058', 'KYN-007', 'BRG-105', '2018-11-10', '2018-12-10', 'Keperluan Kantor', 'selesai'),
('PMJ-059', 'KYN-001', 'BRG-349', '2018-10-04', '2018-12-04', 'Keperluan Kantor', 'selesai'),
('PMJ-060', 'KYN-010', 'BRG-211', '2021-09-01', '2018-09-29', 'Keperluan Lapangan', 'selesai'),
('PMJ-061', 'KYN-025', 'BRG-212', '2018-09-01', '2018-09-29', 'Keperluan Lapangan', 'selesai'),
('PMJ-062', 'KYN-017', 'BRG-214', '2018-09-01', '2018-09-29', 'Keperluan Lapangan', 'selesai'),
('PMJ-063', 'KYN-011', 'BRG-404', '2018-07-22', '2018-08-22', 'Keperluan Persentasi', 'selesai'),
('PMJ-064', 'KYN-023', 'BRG-531', '2018-07-16', '2018-08-16', 'Keperluan Lapangan', 'selesai'),
('PMJ-065', 'KYN-004', 'BRG-346', '2018-07-15', '2018-10-15', 'Keperluan Kantor', 'selesai'),
('PMJ-066', 'KYN-022', 'BRG-330', '2018-06-20', '2018-07-20', 'Keperluan Kantor', 'selesai'),
('PMJ-067', 'KYN-021', 'BRG-105', '2018-06-06', '2018-07-06', 'Keperluan Kantor', 'selesai'),
('PMJ-068', 'KYN-022', 'BRG-350', '2018-04-05', '2018-05-05', 'Keperluan Kantor', 'selesai'),
('PMJ-069', 'KYN-007', 'BRG-264', '2018-04-01', '2018-05-01', 'Keperluan Persentasi', 'selesai'),
('PMJ-070', 'KYN-023', 'BRG-417', '2018-02-17', '2018-05-17', 'Keperluan Lapangan', 'selesai'),
('PMJ-071', 'KYN-022', 'BRG-419', '2018-02-17', '2018-05-17', 'Keperluan Lapangan', 'selesai'),
('PMJ-072', 'KYN-011', 'BRG-430', '2021-02-16', '2018-05-16', 'Keperluan Lapangan', 'selesai'),
('PMJ-073', 'KYN-012', 'BRG-001', '2018-02-15', '2018-05-15', 'Keperluan Lapangan', 'selesai'),
('PMJ-074', 'KYN-015', 'BRG-333', '2018-02-13', '2018-05-13', 'Keperluan Lapangan', 'selesai'),
('PMJ-075', 'KYN-006', 'BRG-492', '2018-02-13', '2018-05-13', 'Keperluan Lapangan', 'selesai'),
('PMJ-076', 'KYN-004', 'BRG-157', '2018-02-11', '2018-05-11', 'Keperluan Lapangan', 'selesai'),
('PMJ-077', 'KYN-003', 'BRG-159', '2018-02-11', '2018-05-11', 'Keperluan Lapangan', 'selesai'),
('PMJ-078', 'KYN-018', 'BRG-429', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-079', 'KYN-014', 'BRG-312', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-080', 'KYN-025', 'BRG-399', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-081', 'KYN-016', 'BRG-188', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-082', 'KYN-017', 'BRG-552', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-083', 'KYN-011', 'BRG-115', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-084', 'KYN-010', 'BRG-100', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-085', 'KYN-009', 'BRG-348', '2018-02-10', '2018-05-10', 'Keperluan Lapangan', 'selesai'),
('PMJ-086', 'KYN-024', 'BRG-167', '2018-01-05', '2018-02-05', 'Survey Lapangan', 'selesai'),
('PMJ-087', 'KYN-021', 'BRG-165', '2018-01-05', '2018-02-05', 'Survey Lapangan', 'selesai'),
('PMJ-088', 'KYN-005', 'BRG-170', '2018-01-05', '2018-02-05', 'Survey Lapangan', 'selesai'),
('PMJ-089', 'KYN-002', 'BRG-171', '2018-02-05', '2018-02-05', 'Survey Lapangan', 'selesai'),
('PMJ-090', 'KYN-001', 'BRG-172', '2018-02-05', '2018-02-05', 'Keperluan Lapangan', 'selesai'),
('PMJ-091', 'KYN-011', 'BRG-116', '2017-11-15', '2017-12-15', 'Keperluan Lapangan', 'selesai'),
('PMJ-092', 'KYN-014', 'BRG-117', '2017-11-15', '2017-12-15', 'Keperluan lapangan', 'selesai'),
('PMJ-093', 'KYN-015', 'BRG-118', '2017-11-15', '2017-12-15', 'Keperluan Lapangan', 'selesai'),
('PMJ-094', 'KYN-018', 'BRG-119', '2018-11-15', '2017-12-15', 'Keperluan Lapangan', 'selesai'),
('PMJ-095', 'KYN-008', 'BRG-400', '2017-11-14', '2017-12-14', 'Keperluan Lapangan', 'selesai'),
('PMJ-096', 'KYN-008', 'BRG-461', '2017-11-14', '2017-12-14', 'Keperluan Lapangan', 'selesai'),
('PMJ-097', 'KYN-009', 'BRG-350', '2017-11-11', '2017-12-11', 'Keperluan Kantor', 'selesai'),
('PMJ-098', 'KYN-012', 'BRG-420', '2017-11-11', '2017-12-11', 'Keperluan Lapangan', 'selesai'),
('PMJ-099', 'KYN-010', 'BRG-302', '2017-11-10', '2017-12-10', 'Keperluan Kantor', 'selesai'),
('PMJ-100', 'KYN-014', 'BRG-380', '2017-11-09', '2017-12-09', 'Keperluan Lapangan', 'selesai'),
('PMJ-101', 'KYN-028', 'BRG-001', '2021-09-29', '2021-09-30', 'Keperluan kantor', 'belum selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengembalian`
--

CREATE TABLE `tbl_pengembalian` (
  `kode_pengembalian` varchar(12) NOT NULL,
  `kode_peminjaman` varchar(12) NOT NULL,
  `tgl_kembali` date NOT NULL DEFAULT current_timestamp(),
  `kondisi_barang` varchar(20) NOT NULL,
  `sanksi` set('Iya','Tidak') NOT NULL,
  `terlambat` tinyint(1) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengembalian`
--

INSERT INTO `tbl_pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `tgl_kembali`, `kondisi_barang`, `sanksi`, `terlambat`, `keterangan`) VALUES
('PGA-001', 'PMJ-001', '2020-02-02', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-002', 'PMJ-002', '2020-02-03', 'Rusak Ringan', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-003', 'PMJ-003', '2020-03-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-004', 'PMJ-004', '2020-03-01', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-005', 'PMJ-005', '2020-06-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-006', 'PMJ-006', '2020-05-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-007', 'PMJ-007', '2020-05-31', 'Rusak Berat', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-008', 'PMJ-008', '2020-05-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-009', 'PMJ-009', '2020-05-28', 'Baik', 'Iya', 0, 'Dipinjamkan'),
('PGA-010', 'PMJ-010', '2020-06-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-011', 'PMJ-011', '2020-05-28', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-012', 'PMJ-012', '2020-05-28', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-013', 'PMJ-013', '2020-11-20', 'Baik', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-014', 'PMJ-014', '2020-06-03', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-015', 'PMJ-015', '2020-09-03', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-016', 'PMJ-016', '2020-06-03', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-017', 'PMJ-017', '2020-06-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-018', 'PMJ-018', '2020-08-02', 'Rusak Ringan', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-019', 'PMJ-019', '2020-07-02', 'Rusak Ringan', 'Tidak', 1, 'Dipinjamkan'),
('PGA-020', 'PMJ-020', '2020-07-02', 'Rusak Berat', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-021', 'PMJ-021', '2020-07-29', 'Rusak Berat', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-022', 'PMJ-022', '2020-07-02', 'Rusak Berat', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-023', 'PMJ-023', '2020-07-15', 'Baik', 'Iya', 0, 'Dipinjamkan'),
('PGA-024', 'PMJ-024', '2020-07-02', 'Rusak Berat', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-025', 'PMJ-025', '2020-08-20', 'Rusak Ringan', 'Tidak', 0, 'Dipinjamkan'),
('PGA-026', 'PMJ-026', '2020-08-18', 'Rusak Berat', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-027', 'PMJ-027', '2020-08-18', 'Hilang', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-028', 'PMJ-028', '2020-08-19', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-029', 'PMJ-029', '2020-08-28', 'Baik', 'Tidak', 0, 'Dipinjamkan'),
('PGA-030', 'PMJ-030', '2020-11-05', 'Rusak Ringan', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-031', 'PMJ-031', '2019-06-08', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-032', 'PMJ-032', '2019-12-02', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-033', 'PMJ-033', '2019-12-02', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-034', 'PMJ-034', '2019-12-28', 'Rusak Berat', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-035', 'PMJ-035', '2019-12-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-036', 'PMJ-036', '2019-12-18', 'Rusak Ringan', 'Iya', 0, 'Dipinjamkan'),
('PGA-037', 'PMJ-037', '2019-12-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-038', 'PMJ-038', '2019-12-08', 'Rusak Berat', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-039', 'PMJ-039', '2019-12-20', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-040', 'PMJ-040', '2019-12-02', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-041', 'PMJ-041', '2019-12-02', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-042', 'PMJ-042', '2019-12-22', 'Baik', 'Tidak', 0, 'Dipinjamkan'),
('PGA-043', 'PMJ-043', '2019-12-15', 'Baik', 'Iya', 0, 'Dipinjamkan'),
('PGA-044', 'PMJ-044', '2019-11-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-045', 'PMJ-045', '2019-11-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-046', 'PMJ-046', '2019-11-11', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-047', 'PMJ-047', '2019-11-12', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-048', 'PMJ-048', '2019-11-12', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-049', 'PMJ-049', '2019-11-22', 'Baik', 'Tidak', 0, 'Dipinjamkan'),
('PGA-050', 'PMJ-050', '2019-12-11', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-051', 'PMJ-051', '2019-06-08', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-052', 'PMJ-052', '2019-06-06', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-053', 'PMJ-053', '2019-04-06', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-054', 'PMJ-054', '2019-04-06', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-055', 'PMJ-055', '2019-04-03', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-056', 'PMJ-056', '2019-04-03', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-057', 'PMJ-057', '2018-12-23', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-058', 'PMJ-058', '2018-12-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-059', 'PMJ-059', '2018-12-04', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-060', 'PMJ-060', '2018-09-29', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-061', 'PMJ-061', '2018-09-29', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-062', 'PMJ-062', '2018-09-29', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-063', 'PMJ-063', '2018-08-22', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-064', 'PMJ-064', '2018-08-16', 'Rusak Ringan', 'Iya', 1, 'Dipinjamkan'),
('PGA-065', 'PMJ-065', '2018-10-15', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-066', 'PMJ-066', '2018-07-20', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-067', 'PMJ-067', '2018-07-06', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-068', 'PMJ-068', '2018-05-10', 'Baik', 'Tidak', 0, 'Dipinjamkan'),
('PGA-069', 'PMJ-069', '2018-05-01', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-070', 'PMJ-070', '2018-05-17', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-071', 'PMJ-071', '2018-05-17', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-072', 'PMJ-072', '2018-06-10', 'Baik', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-073', 'PMJ-073', '2018-05-15', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-074', 'PMJ-074', '2018-05-13', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-075', 'PMJ-075', '2018-05-13', 'Hilang', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-076', 'PMJ-076', '2018-05-11', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-077', 'PMJ-077', '2018-05-11', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-078', 'PMJ-078', '2018-05-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-079', 'PMJ-079', '2018-05-27', 'Rusak Berat', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-080', 'PMJ-080', '2018-05-31', 'Rusak Ringan', 'Iya', 0, 'Tidak Dipinjamkan'),
('PGA-081', 'PMJ-081', '2018-05-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-082', 'PMJ-082', '2018-05-10', 'Rusak Berat', 'Iya', 1, 'Tidak Dipinjamkan'),
('PGA-083', 'PMJ-083', '2018-05-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-084', 'PMJ-084', '2018-05-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-085', 'PMJ-085', '2018-05-10', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-086', 'PMJ-086', '2018-02-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-087', 'PMJ-087', '2018-02-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-088', 'PMJ-088', '2018-02-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-089', 'PMJ-089', '2018-02-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-090', 'PMJ-090', '2018-02-05', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-091', 'PMJ-091', '2017-12-15', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-092', 'PMJ-092', '2018-12-15', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-093', 'PMJ-093', '2017-12-15', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-094', 'PMJ-094', '2018-12-15', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-095', 'PMJ-095', '2017-12-17', 'Baik', 'Tidak', 0, 'Dipinjamkan'),
('PGA-096', 'PMJ-096', '2017-12-17', 'Baik', 'Tidak', 0, 'Dipinjamkan'),
('PGA-097', 'PMJ-097', '2017-12-11', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-098', 'PMJ-098', '2017-12-11', 'Baik', 'Tidak', 1, 'Dipinjamkan'),
('PGA-099', 'PMJ-099', '2017-12-15', 'Baik', 'Tidak', 0, 'Dipinjamkan'),
('PGA-100', 'PMJ-100', '2017-12-09', 'Baik', 'Tidak', 1, 'Dipinjamkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `role` set('admin','petugas') NOT NULL,
  `password` varchar(50) NOT NULL,
  `kode_karyawan` varchar(12) NOT NULL,
  `tgl_daftar` datetime NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `username`, `role`, `password`, `kode_karyawan`, `tgl_daftar`, `photo`) VALUES
('Mulliadi', 'admin', 'admin', '25d55ad283aa400af464c76d713c07ad', 'KYN-026', '2021-08-26 16:49:22', '76a9c2e0a0239d42bfbff09823441adf704f9fdd.PNG'),
('Ari Prima S.Kom', 'ariprima', 'petugas', '25d55ad283aa400af464c76d713c07ad', 'KYN-001', '2020-12-17 07:08:15', '0be3126acf6911f63ad51455ee9308417fcebae9.PNG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `id_header_barang` (`id_header_barang`);

--
-- Indeks untuk tabel `tbl_header_barang`
--
ALTER TABLE `tbl_header_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`kode_karyawan`),
  ADD KEY `kode jabatan` (`kode_jabatan`);

--
-- Indeks untuk tabel `tbl_naive_bayes`
--
ALTER TABLE `tbl_naive_bayes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_karyawan` (`kode_karyawan`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_pengembalian` (`kode_pengembalian`);

--
-- Indeks untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`kode_peminjaman`),
  ADD KEY `kode_karyawan` (`kode_karyawan`,`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD PRIMARY KEY (`kode_pengembalian`),
  ADD KEY `no_peminjaman` (`kode_peminjaman`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_header_barang`
--
ALTER TABLE `tbl_header_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tbl_naive_bayes`
--
ALTER TABLE `tbl_naive_bayes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`id_header_barang`) REFERENCES `tbl_header_barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD CONSTRAINT `tbl_karyawan_ibfk_1` FOREIGN KEY (`kode_jabatan`) REFERENCES `tbl_jabatan` (`kode_jabatan`);

--
-- Ketidakleluasaan untuk tabel `tbl_naive_bayes`
--
ALTER TABLE `tbl_naive_bayes`
  ADD CONSTRAINT `tbl_naive_bayes_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tbl_barang` (`kode_barang`),
  ADD CONSTRAINT `tbl_naive_bayes_ibfk_2` FOREIGN KEY (`kode_karyawan`) REFERENCES `tbl_karyawan` (`kode_karyawan`),
  ADD CONSTRAINT `tbl_naive_bayes_ibfk_3` FOREIGN KEY (`kode_pengembalian`) REFERENCES `tbl_pengembalian` (`kode_pengembalian`);

--
-- Ketidakleluasaan untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `tbl_peminjaman_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tbl_barang` (`kode_barang`),
  ADD CONSTRAINT `tbl_peminjaman_ibfk_2` FOREIGN KEY (`kode_karyawan`) REFERENCES `tbl_karyawan` (`kode_karyawan`);

--
-- Ketidakleluasaan untuk tabel `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD CONSTRAINT `tbl_pengembalian_ibfk_1` FOREIGN KEY (`kode_peminjaman`) REFERENCES `tbl_peminjaman` (`kode_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
