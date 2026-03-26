<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message - Hotel Antik Soreang</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; line-height: 1.6; color: #374151; max-width: 600px; margin: 0 auto; background: #f9fafb; }
        .header { background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); color: white; padding: 40px 30px; text-align: center; }
        .content { background: white; padding: 40px 30px; }
        .footer { background: #1f2937; color: white; padding: 30px; text-align: center; font-size: 14px; }
        .highlight { background: #fef3c7; padding: 15px; border-radius: 8px; border-left: 4px solid #f59e0b; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background: #f3f4f6; font-weight: 600; }
        .btn { display: inline-block; padding: 12px 24px; background: #4f46e5; color: white; text-decoration: none; border-radius: 8px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0; font-size: 28px;">📧 Pesan Baru dari Contact Form</h1>
        <p style="margin: 8px 0 0; opacity: 0.9;">Hotel Antik Soreang</p>
    </div>

    <div class="content">
        <p>Halo Tim Hotel Antik,</p>
        <p>Ada pesan baru dari pengunjung website:</p>

        <div class="highlight">
            <p><strong>Status:</strong> Pesan diterima pada {{ now()->format('d M Y, H:i') }}</p>
        </div>

        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $contact['name'] }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td><a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a></td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td><a href="tel:{{ $contact['phone'] }}">{{ $contact['phone'] }}</a></td>
            </tr>
            <tr>
                <th>Pesan</th>
                <td>{{ $contact['message'] }}</td>
            </tr>
        </table>

        <p><strong>Action yang disarankan:</strong></p>
        <ul>
            <li>Hubungi via WhatsApp/Telepon dalam 24 jam</li>
            <li>Balas email konfirmasi</li>
            <li>Follow up untuk reservasi</li>
        </ul>

        <div style="text-align: center; margin: 30px 0;">
            <a href="mailto:{{ $contact['email'] }}" class="btn">Balas Email</a>
            <a href="tel:{{ $contact['phone'] }}" class="btn" style="background: #10b981; margin-left: 10px;">Telepon</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; {{ now()->year }} Hotel Antik Soreang. All rights reserved.</p>
        <p style="margin-top: 10px; opacity: 0.8;">Jika ini bukan pesan penting, abaikan email ini.</p>
    </div>
</body>
</html>

