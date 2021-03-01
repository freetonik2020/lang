<?php

return [
    'command' => implode("\n", [
        '🤑',
        ' Request payment',
    ]),

    "ask_amount" => implode("\n", [
        "💸 Enter amount to request.",
        "Example: 1.25"
    ]),

    "info" => "➡️ Forward the following message to the user you want to request TON Crystals from.",

    "url" => ":url",

    "qrcode" => "🖼️ Or you can show him this QR code if he's somewhere around.",

    "non_numeric" => implode("\n", [
        "Request amount should be numeric.",
        "Aborted.",
    ]),
];
