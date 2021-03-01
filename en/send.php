<?php

return [
    'command' => implode("\n", [
        '👉',
        ' Send payment',
    ]),

    "ask_username" => implode("\n", [
        "🔀 Enter transfer destination.",
        "You can attach a contact, fill a username or provide a plain TON address.",
    ]),

    "ask_amount" => implode("\n", [
        "💸 Enter amount to transfer.",
        "Example: 1.25"
    ]),

    "ask_confirmation" => implode("\n", [
        "⚠️ Please confirm the transaction.",
        "Transfer amount: 💎 :amount",
        "Destination: 👤 :destination",
        "Estimate fees 💎 0.020",
    ]),

    "sending" => "Processing. Please wait...",

    "success" => implode("\n", [
        "✅ Transaction successfull.",
        ":url",
    ]),

    "fail" => [
        "notfound" => implode("\n", [
            "🚫 Sorry. I could not find the username you provided.",
            "Maybe he doesn't have a wallet yet?",
            "You can invite him to create a new wallet. To do that just forward the next message.",
        ]),

        "toosmall" => "🚫 Minimum amount to send is 💎 :min_amount.",
    ],

    "aborted" => "🚫 Transaction aborted.",
];
