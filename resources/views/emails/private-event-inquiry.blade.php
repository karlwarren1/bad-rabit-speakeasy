<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta
      content="width=device-width, initial-scale=1"
      name="viewport"
    >
    <title>New Private Event Inquiry</title>
  </head>

  <body style="margin:0; padding:0; background-color:#0B0908; font-family: Georgia, 'Times New Roman', serif;">
    <table
      cellpadding="0"
      cellspacing="0"
      role="presentation"
      style="background-color:#0B0908; padding: 32px 16px;"
      width="100%"
    >
      <tr>
        <td align="center">
          <table
            cellpadding="0"
            cellspacing="0"
            role="presentation"
            style="max-width: 560px; background-color:#12100E; border:1px solid #3A2C21;"
            width="100%"
          >

            {{-- oxblood band header --}}
            <tr>
              <td
                align="center"
                style="background-color: #7A1F27; padding: 28px 24px;"
              >
                <img
                  alt="Bad Rabbit"
                  src="{{ asset('img/logo-lockup.png') }}"
                  style="display:block; max-width:220px; height:auto; margin:0 auto;"
                  width="220"
                >
              </td>
            </tr>

            {{-- kicker --}}
            <tr>
              <td
                align="center"
                style="padding: 28px 32px 4px;"
              >
                <p
                  style="margin:0; color:#9A7B4F; font-family: Arial, Helvetica, sans-serif; font-size:12px; letter-spacing:2px; text-transform:uppercase;">
                  Private Event Inquiry
                </p>
              </td>
            </tr>

            <tr>
              <td
                align="center"
                style="padding: 0 32px 24px;"
              >
                <p
                  style="margin:0; color:#E9E0CE; font-family: Georgia, 'Times New Roman', serif; font-style:italic; font-size:18px;">
                  Someone wants the room to themselves.
                </p>
              </td>
            </tr>

            {{-- details table --}}
            <tr>
              <td style="padding: 0 32px 8px;">
                <table
                  cellpadding="0"
                  cellspacing="0"
                  role="presentation"
                  width="100%"
                >
                  <tr>
                    <td
                      style="padding:14px 0; border-bottom:1px solid #3A2C21; font-family: Arial, Helvetica, sans-serif; font-size:12px; letter-spacing:1px; text-transform:uppercase; color:#8C8177; width:110px; vertical-align:top;"
                    >Name</td>
                    <td
                      style="padding:14px 0; border-bottom:1px solid #3A2C21; font-family: Arial, Helvetica, sans-serif; font-size:15px; color:#E9E0CE;"
                    >{{ $inquiry->name }}</td>
                  </tr>
                  <tr>
                    <td
                      style="padding:14px 0; border-bottom:1px solid #3A2C21; font-family: Arial, Helvetica, sans-serif; font-size:12px; letter-spacing:1px; text-transform:uppercase; color:#8C8177; width:110px; vertical-align:top;"
                    >Email</td>
                    <td
                      style="padding:14px 0; border-bottom:1px solid #3A2C21; font-family: Arial, Helvetica, sans-serif; font-size:15px; color:#E9E0CE;"
                    >
                      <a
                        href="mailto:{{ $inquiry->email }}"
                        style="color:#C9982B; text-decoration:none;"
                      >{{ $inquiry->email }}</a>
                    </td>
                  </tr>
                  <tr>
                    <td
                      style="padding:14px 0; border-bottom:1px solid #3A2C21; font-family: Arial, Helvetica, sans-serif; font-size:12px; letter-spacing:1px; text-transform:uppercase; color:#8C8177; width:110px; vertical-align:top;"
                    >Phone</td>
                    <td
                      style="padding:14px 0; border-bottom:1px solid #3A2C21; font-family: Arial, Helvetica, sans-serif; font-size:15px; color:#E9E0CE;"
                    >
                      {{ $inquiry->phone ?: '—' }}
                    </td>
                  </tr>
                  <tr>
                    <td
                      style="padding:14px 0; font-family: Arial, Helvetica, sans-serif; font-size:12px; letter-spacing:1px; text-transform:uppercase; color:#8C8177; width:110px; vertical-align:top;"
                    >Message</td>
                    <td
                      style="padding:14px 0; font-family: Arial, Helvetica, sans-serif; font-size:15px; color:#E9E0CE; line-height:1.6;"
                    >
                      {{ $inquiry->message ?: '—' }}
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            {{-- footer --}}
            <tr>
              <td
                align="center"
                style="padding: 28px 32px 32px;"
              >
                <p
                  style="margin:0 0 6px; font-family: Arial, Helvetica, sans-serif; font-size:11px; letter-spacing:1px; color:#8C8177;">
                  Submitted {{ $inquiry->created_at->format('M j, Y \a\t g:i A') }}
                </p>
                <p
                  style="margin:0; font-family: Georgia, 'Times New Roman', serif; font-style:italic; font-size:13px; color:#C9982B;">
                  Behave badly.
                </p>
              </td>
            </tr>

          </table>
        </td>
      </tr>
    </table>
  </body>

</html>
