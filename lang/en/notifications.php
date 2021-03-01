<?php

return [
    "deployed" => implode("\n", [
        "New wallet successfully deployed.",
    ]),

    "received" => implode("\n", [
        "Transaction received: 💎 :amount",
        "To check your balance run /balance",
    ]),

    "sent" => implode("\n", [
        "Transaction sent: 💎 :amount",
    ]),

    "transfer_from_giver_failed" => "Transfer failed. Please try again.",
];
