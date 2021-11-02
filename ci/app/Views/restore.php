<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Solana wallet with support for SPL tokens.">
    <link rel="apple-touch-icon" href="/logo192.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <title>Solana SPL Token Wallet</title>
    <style data-jss="" data-meta="MuiTouchRipple">
        .MuiTouchRipple-root {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            overflow: hidden;
            position: absolute;
            border-radius: inherit;
            pointer-events: none;
        }

        .MuiTouchRipple-ripple {
            opacity: 0;
            position: absolute;
        }

        .MuiTouchRipple-rippleVisible {
            opacity: 0.3;
            animation: MuiTouchRipple-keyframes-enter 550ms cubic-bezier(0.4, 0, 0.2, 1);
            transform: scale(1);
        }

        .MuiTouchRipple-ripplePulsate {
            animation-duration: 200ms;
        }

        .MuiTouchRipple-child {
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
            border-radius: 50%;
            background-color: currentColor;
        }

        .MuiTouchRipple-childLeaving {
            opacity: 0;
            animation: MuiTouchRipple-keyframes-exit 550ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .MuiTouchRipple-childPulsate {
            top: 0;
            left: 0;
            position: absolute;
            animation: MuiTouchRipple-keyframes-pulsate 2500ms cubic-bezier(0.4, 0, 0.2, 1) 200ms infinite;
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-enter {
            0% {
                opacity: 0.1;
                transform: scale(0);
            }

            100% {
                opacity: 0.3;
                transform: scale(1);
            }
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-exit {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-pulsate {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.92);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    <style data-jss="" data-meta="MuiButtonBase">
        .MuiButtonBase-root {
            color: inherit;
            border: 0;
            cursor: pointer;
            margin: 0;
            display: inline-flex;
            outline: 0;
            padding: 0;
            position: relative;
            align-items: center;
            user-select: none;
            border-radius: 0;
            vertical-align: middle;
            -moz-appearance: none;
            justify-content: center;
            text-decoration: none;
            background-color: transparent;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiButtonBase-root::-moz-focus-inner {
            border-style: none;
        }

        .MuiButtonBase-root.Mui-disabled {
            cursor: default;
            pointer-events: none;
        }

        @media print {
            .MuiButtonBase-root {
                -webkit-print-color-adjust: exact;
            }
        }
    </style>
    <style data-jss="" data-meta="MuiCssBaseline">
        html {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        strong,
        b {
            font-weight: 700;
        }

        body {
            color: rgba(0, 0, 0, 0.87);
            margin: 0;
            font-size: 0.875rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.43;
            letter-spacing: 0.01071em;
            background-color: #fafafa;
        }

        @media print {
            body {
                background-color: #fff;
            }
        }

        body::backdrop {
            background-color: #fafafa;
        }
    </style>
    <style data-jss="" data-meta="MuiTypography">
        .MuiTypography-root {
            margin: 0;
        }

        .MuiTypography-body2 {
            font-size: 0.875rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.43;
            letter-spacing: 0.01071em;
        }

        .MuiTypography-body1 {
            font-size: 1rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.00938em;
        }

        .MuiTypography-caption {
            font-size: 0.75rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.66;
            letter-spacing: 0.03333em;
        }

        .MuiTypography-button {
            font-size: 0.875rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            line-height: 1.75;
            letter-spacing: 0.02857em;
            text-transform: uppercase;
        }

        .MuiTypography-h1 {
            font-size: 6rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 300;
            line-height: 1.167;
            letter-spacing: -0.01562em;
        }

        .MuiTypography-h2 {
            font-size: 3.75rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 300;
            line-height: 1.2;
            letter-spacing: -0.00833em;
        }

        .MuiTypography-h3 {
            font-size: 3rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.167;
            letter-spacing: 0em;
        }

        .MuiTypography-h4 {
            font-size: 2.125rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.235;
            letter-spacing: 0.00735em;
        }

        .MuiTypography-h5 {
            font-size: 1.5rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.334;
            letter-spacing: 0em;
        }

        .MuiTypography-h6 {
            font-size: 1.25rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            line-height: 1.6;
            letter-spacing: 0.0075em;
        }

        .MuiTypography-subtitle1 {
            font-size: 1rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.75;
            letter-spacing: 0.00938em;
        }

        .MuiTypography-subtitle2 {
            font-size: 0.875rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            line-height: 1.57;
            letter-spacing: 0.00714em;
        }

        .MuiTypography-overline {
            font-size: 0.75rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 2.66;
            letter-spacing: 0.08333em;
            text-transform: uppercase;
        }

        .MuiTypography-srOnly {
            width: 1px;
            height: 1px;
            overflow: hidden;
            position: absolute;
        }

        .MuiTypography-alignLeft {
            text-align: left;
        }

        .MuiTypography-alignCenter {
            text-align: center;
        }

        .MuiTypography-alignRight {
            text-align: right;
        }

        .MuiTypography-alignJustify {
            text-align: justify;
        }

        .MuiTypography-noWrap {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .MuiTypography-gutterBottom {
            margin-bottom: 0.35em;
        }

        .MuiTypography-paragraph {
            margin-bottom: 16px;
        }

        .MuiTypography-colorInherit {
            color: inherit;
        }

        .MuiTypography-colorPrimary {
            color: #2196f3;
        }

        .MuiTypography-colorSecondary {
            color: #f50057;
        }

        .MuiTypography-colorTextPrimary {
            color: rgba(0, 0, 0, 0.87);
        }

        .MuiTypography-colorTextSecondary {
            color: rgba(0, 0, 0, 0.54);
        }

        .MuiTypography-colorError {
            color: #f44336;
        }

        .MuiTypography-displayInline {
            display: inline;
        }

        .MuiTypography-displayBlock {
            display: block;
        }
    </style>
    <style data-jss="" data-meta="MuiButton">
        .MuiButton-root {
            color: rgba(0, 0, 0, 0.87);
            padding: 6px 16px;
            font-size: 0.875rem;
            min-width: 64px;
            box-sizing: border-box;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            line-height: 1.75;
            border-radius: 4px;
            letter-spacing: 0.02857em;
            text-transform: uppercase;
        }

        .MuiButton-root:hover {
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.04);
        }

        .MuiButton-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
        }

        @media (hover: none) {
            .MuiButton-root:hover {
                background-color: transparent;
            }
        }

        .MuiButton-root:hover.Mui-disabled {
            background-color: transparent;
        }

        .MuiButton-label {
            width: 100%;
            display: inherit;
            align-items: inherit;
            justify-content: inherit;
        }

        .MuiButton-text {
            padding: 6px 8px;
        }

        .MuiButton-textPrimary {
            color: #2196f3;
        }

        .MuiButton-textPrimary:hover {
            background-color: rgba(33, 150, 243, 0.04);
        }

        @media (hover: none) {
            .MuiButton-textPrimary:hover {
                background-color: transparent;
            }
        }

        .MuiButton-textSecondary {
            color: #f50057;
        }

        .MuiButton-textSecondary:hover {
            background-color: rgba(245, 0, 87, 0.04);
        }

        @media (hover: none) {
            .MuiButton-textSecondary:hover {
                background-color: transparent;
            }
        }

        .MuiButton-outlined {
            border: 1px solid rgba(0, 0, 0, 0.23);
            padding: 5px 15px;
        }

        .MuiButton-outlined.Mui-disabled {
            border: 1px solid rgba(0, 0, 0, 0.12);
        }

        .MuiButton-outlinedPrimary {
            color: #2196f3;
            border: 1px solid rgba(33, 150, 243, 0.5);
        }

        .MuiButton-outlinedPrimary:hover {
            border: 1px solid #2196f3;
            background-color: rgba(33, 150, 243, 0.04);
        }

        @media (hover: none) {
            .MuiButton-outlinedPrimary:hover {
                background-color: transparent;
            }
        }

        .MuiButton-outlinedSecondary {
            color: #f50057;
            border: 1px solid rgba(245, 0, 87, 0.5);
        }

        .MuiButton-outlinedSecondary:hover {
            border: 1px solid #f50057;
            background-color: rgba(245, 0, 87, 0.04);
        }

        .MuiButton-outlinedSecondary.Mui-disabled {
            border: 1px solid rgba(0, 0, 0, 0.26);
        }

        @media (hover: none) {
            .MuiButton-outlinedSecondary:hover {
                background-color: transparent;
            }
        }

        .MuiButton-contained {
            color: rgba(0, 0, 0, 0.87);
            box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
            background-color: #e0e0e0;
        }

        .MuiButton-contained:hover {
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
            background-color: #d5d5d5;
        }

        .MuiButton-contained.Mui-focusVisible {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiButton-contained:active {
            box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
        }

        .MuiButton-contained.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
            box-shadow: none;
            background-color: rgba(0, 0, 0, 0.12);
        }

        @media (hover: none) {
            .MuiButton-contained:hover {
                box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
                background-color: #e0e0e0;
            }
        }

        .MuiButton-contained:hover.Mui-disabled {
            background-color: rgba(0, 0, 0, 0.12);
        }

        .MuiButton-containedPrimary {
            color: #fff;
            background-color: #2196f3;
        }

        .MuiButton-containedPrimary:hover {
            background-color: #1976d2;
        }

        @media (hover: none) {
            .MuiButton-containedPrimary:hover {
                background-color: #2196f3;
            }
        }

        .MuiButton-containedSecondary {
            color: #fff;
            background-color: #f50057;
        }

        .MuiButton-containedSecondary:hover {
            background-color: #c51162;
        }

        @media (hover: none) {
            .MuiButton-containedSecondary:hover {
                background-color: #f50057;
            }
        }

        .MuiButton-disableElevation {
            box-shadow: none;
        }

        .MuiButton-disableElevation:hover {
            box-shadow: none;
        }

        .MuiButton-disableElevation.Mui-focusVisible {
            box-shadow: none;
        }

        .MuiButton-disableElevation:active {
            box-shadow: none;
        }

        .MuiButton-disableElevation.Mui-disabled {
            box-shadow: none;
        }

        .MuiButton-colorInherit {
            color: inherit;
            border-color: currentColor;
        }

        .MuiButton-textSizeSmall {
            padding: 4px 5px;
            font-size: 0.8125rem;
        }

        .MuiButton-textSizeLarge {
            padding: 8px 11px;
            font-size: 0.9375rem;
        }

        .MuiButton-outlinedSizeSmall {
            padding: 3px 9px;
            font-size: 0.8125rem;
        }

        .MuiButton-outlinedSizeLarge {
            padding: 7px 21px;
            font-size: 0.9375rem;
        }

        .MuiButton-containedSizeSmall {
            padding: 4px 10px;
            font-size: 0.8125rem;
        }

        .MuiButton-containedSizeLarge {
            padding: 8px 22px;
            font-size: 0.9375rem;
        }

        .MuiButton-fullWidth {
            width: 100%;
        }

        .MuiButton-startIcon {
            display: inherit;
            margin-left: -4px;
            margin-right: 8px;
        }

        .MuiButton-startIcon.MuiButton-iconSizeSmall {
            margin-left: -2px;
        }

        .MuiButton-endIcon {
            display: inherit;
            margin-left: 8px;
            margin-right: -4px;
        }

        .MuiButton-endIcon.MuiButton-iconSizeSmall {
            margin-right: -2px;
        }

        .MuiButton-iconSizeSmall>*:first-child {
            font-size: 18px;
        }

        .MuiButton-iconSizeMedium>*:first-child {
            font-size: 20px;
        }

        .MuiButton-iconSizeLarge>*:first-child {
            font-size: 22px;
        }
    </style>
    <style data-jss="" data-meta="MuiPaper">
        .MuiPaper-root {
            color: rgba(0, 0, 0, 0.87);
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            background-color: #fff;
        }

        .MuiPaper-rounded {
            border-radius: 4px;
        }

        .MuiPaper-outlined {
            border: 1px solid rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation0 {
            box-shadow: none;
        }

        .MuiPaper-elevation1 {
            box-shadow: 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation2 {
            box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation3 {
            box-shadow: 0px 3px 3px -2px rgba(0, 0, 0, 0.2), 0px 3px 4px 0px rgba(0, 0, 0, 0.14), 0px 1px 8px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation4 {
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation5 {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 5px 8px 0px rgba(0, 0, 0, 0.14), 0px 1px 14px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation6 {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation7 {
            box-shadow: 0px 4px 5px -2px rgba(0, 0, 0, 0.2), 0px 7px 10px 1px rgba(0, 0, 0, 0.14), 0px 2px 16px 1px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation8 {
            box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation9 {
            box-shadow: 0px 5px 6px -3px rgba(0, 0, 0, 0.2), 0px 9px 12px 1px rgba(0, 0, 0, 0.14), 0px 3px 16px 2px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation10 {
            box-shadow: 0px 6px 6px -3px rgba(0, 0, 0, 0.2), 0px 10px 14px 1px rgba(0, 0, 0, 0.14), 0px 4px 18px 3px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation11 {
            box-shadow: 0px 6px 7px -4px rgba(0, 0, 0, 0.2), 0px 11px 15px 1px rgba(0, 0, 0, 0.14), 0px 4px 20px 3px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation12 {
            box-shadow: 0px 7px 8px -4px rgba(0, 0, 0, 0.2), 0px 12px 17px 2px rgba(0, 0, 0, 0.14), 0px 5px 22px 4px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation13 {
            box-shadow: 0px 7px 8px -4px rgba(0, 0, 0, 0.2), 0px 13px 19px 2px rgba(0, 0, 0, 0.14), 0px 5px 24px 4px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation14 {
            box-shadow: 0px 7px 9px -4px rgba(0, 0, 0, 0.2), 0px 14px 21px 2px rgba(0, 0, 0, 0.14), 0px 5px 26px 4px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation15 {
            box-shadow: 0px 8px 9px -5px rgba(0, 0, 0, 0.2), 0px 15px 22px 2px rgba(0, 0, 0, 0.14), 0px 6px 28px 5px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation16 {
            box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.2), 0px 16px 24px 2px rgba(0, 0, 0, 0.14), 0px 6px 30px 5px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation17 {
            box-shadow: 0px 8px 11px -5px rgba(0, 0, 0, 0.2), 0px 17px 26px 2px rgba(0, 0, 0, 0.14), 0px 6px 32px 5px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation18 {
            box-shadow: 0px 9px 11px -5px rgba(0, 0, 0, 0.2), 0px 18px 28px 2px rgba(0, 0, 0, 0.14), 0px 7px 34px 6px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation19 {
            box-shadow: 0px 9px 12px -6px rgba(0, 0, 0, 0.2), 0px 19px 29px 2px rgba(0, 0, 0, 0.14), 0px 7px 36px 6px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation20 {
            box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.2), 0px 20px 31px 3px rgba(0, 0, 0, 0.14), 0px 8px 38px 7px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation21 {
            box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.2), 0px 21px 33px 3px rgba(0, 0, 0, 0.14), 0px 8px 40px 7px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation22 {
            box-shadow: 0px 10px 14px -6px rgba(0, 0, 0, 0.2), 0px 22px 35px 3px rgba(0, 0, 0, 0.14), 0px 8px 42px 7px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation23 {
            box-shadow: 0px 11px 14px -7px rgba(0, 0, 0, 0.2), 0px 23px 36px 3px rgba(0, 0, 0, 0.14), 0px 9px 44px 8px rgba(0, 0, 0, 0.12);
        }

        .MuiPaper-elevation24 {
            box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-jss="" data-meta="MuiDialog">
        @media print {
            .MuiDialog-root {
                position: absolute !important;
            }
        }

        .MuiDialog-scrollPaper {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .MuiDialog-scrollBody {
            overflow-x: hidden;
            overflow-y: auto;
            text-align: center;
        }

        .MuiDialog-scrollBody:after {
            width: 0;
            height: 100%;
            content: "";
            display: inline-block;
            vertical-align: middle;
        }

        .MuiDialog-container {
            height: 100%;
            outline: 0;
        }

        @media print {
            .MuiDialog-container {
                height: auto;
            }
        }

        .MuiDialog-paper {
            margin: 32px;
            position: relative;
            overflow-y: auto;
        }

        @media print {
            .MuiDialog-paper {
                box-shadow: none;
                overflow-y: visible;
            }
        }

        .MuiDialog-paperScrollPaper {
            display: flex;
            max-height: calc(100% - 64px);
            flex-direction: column;
        }

        .MuiDialog-paperScrollBody {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        .MuiDialog-paperWidthFalse {
            max-width: calc(100% - 64px);
        }

        .MuiDialog-paperWidthXs {
            max-width: 444px;
        }

        @media (max-width:507.95px) {
            .MuiDialog-paperWidthXs.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthSm {
            max-width: 600px;
        }

        @media (max-width:663.95px) {
            .MuiDialog-paperWidthSm.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthMd {
            max-width: 960px;
        }

        @media (max-width:1023.95px) {
            .MuiDialog-paperWidthMd.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthLg {
            max-width: 1280px;
        }

        @media (max-width:1343.95px) {
            .MuiDialog-paperWidthLg.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperWidthXl {
            max-width: 1920px;
        }

        @media (max-width:1983.95px) {
            .MuiDialog-paperWidthXl.MuiDialog-paperScrollBody {
                max-width: calc(100% - 64px);
            }
        }

        .MuiDialog-paperFullWidth {
            width: calc(100% - 64px);
        }

        .MuiDialog-paperFullScreen {
            width: 100%;
            height: 100%;
            margin: 0;
            max-width: 100%;
            max-height: none;
            border-radius: 0;
        }

        .MuiDialog-paperFullScreen.MuiDialog-paperScrollBody {
            margin: 0;
            max-width: 100%;
        }
    </style>
    <style data-jss="" data-meta="MuiToolbar">
        .MuiToolbar-root {
            display: flex;
            position: relative;
            align-items: center;
        }

        .MuiToolbar-gutters {
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .MuiToolbar-gutters {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        .MuiToolbar-regular {
            min-height: 56px;
        }

        @media (min-width:0px) and (orientation: landscape) {
            .MuiToolbar-regular {
                min-height: 48px;
            }
        }

        @media (min-width:600px) {
            .MuiToolbar-regular {
                min-height: 64px;
            }
        }

        .MuiToolbar-dense {
            min-height: 48px;
        }
    </style>
    <style data-jss="" data-meta="MuiAppBar">
        .MuiAppBar-root {
            width: 100%;
            display: flex;
            z-index: 1100;
            box-sizing: border-box;
            flex-shrink: 0;
            flex-direction: column;
        }

        .MuiAppBar-positionFixed {
            top: 0;
            left: auto;
            right: 0;
            position: fixed;
        }

        @media print {
            .MuiAppBar-positionFixed {
                position: absolute;
            }
        }

        .MuiAppBar-positionAbsolute {
            top: 0;
            left: auto;
            right: 0;
            position: absolute;
        }

        .MuiAppBar-positionSticky {
            top: 0;
            left: auto;
            right: 0;
            position: sticky;
        }

        .MuiAppBar-positionStatic {
            position: static;
        }

        .MuiAppBar-positionRelative {
            position: relative;
        }

        .MuiAppBar-colorDefault {
            color: rgba(0, 0, 0, 0.87);
            background-color: #f5f5f5;
        }

        .MuiAppBar-colorPrimary {
            color: #fff;
            background-color: #2196f3;
        }

        .MuiAppBar-colorSecondary {
            color: #fff;
            background-color: #f50057;
        }

        .MuiAppBar-colorInherit {
            color: inherit;
        }

        .MuiAppBar-colorTransparent {
            color: inherit;
            background-color: transparent;
        }
    </style>
    <style data-jss="" data-meta="MuiPopover">
        .MuiPopover-paper {
            outline: 0;
            position: absolute;
            max-width: calc(100% - 32px);
            min-width: 16px;
            max-height: calc(100% - 32px);
            min-height: 16px;
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>
    <style data-jss="" data-meta="MuiMenu">
        .MuiMenu-paper {
            max-height: calc(100% - 96px);
            -webkit-overflow-scrolling: touch;
        }

        .MuiMenu-list {
            outline: 0;
        }
    </style>
    <style data-jss="" data-meta="MuiSvgIcon">
        .MuiSvgIcon-root {
            fill: currentColor;
            width: 1em;
            height: 1em;
            display: inline-block;
            font-size: 1.5rem;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            flex-shrink: 0;
            user-select: none;
        }

        .MuiSvgIcon-colorPrimary {
            color: #2196f3;
        }

        .MuiSvgIcon-colorSecondary {
            color: #f50057;
        }

        .MuiSvgIcon-colorAction {
            color: rgba(0, 0, 0, 0.54);
        }

        .MuiSvgIcon-colorError {
            color: #f44336;
        }

        .MuiSvgIcon-colorDisabled {
            color: rgba(0, 0, 0, 0.26);
        }

        .MuiSvgIcon-fontSizeInherit {
            font-size: inherit;
        }

        .MuiSvgIcon-fontSizeSmall {
            font-size: 1.25rem;
        }

        .MuiSvgIcon-fontSizeLarge {
            font-size: 2.1875rem;
        }
    </style>
    <style data-jss="" data-meta="MuiInputBase">
        @-webkit-keyframes mui-auto-fill {}

        @-webkit-keyframes mui-auto-fill-cancel {}

        .MuiInputBase-root {
            color: rgba(0, 0, 0, 0.87);
            cursor: text;
            display: inline-flex;
            position: relative;
            font-size: 1rem;
            box-sizing: border-box;
            align-items: center;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.1876em;
            letter-spacing: 0.00938em;
        }

        .MuiInputBase-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
            cursor: default;
        }

        .MuiInputBase-multiline {
            padding: 6px 0 7px;
        }

        .MuiInputBase-multiline.MuiInputBase-marginDense {
            padding-top: 3px;
        }

        .MuiInputBase-fullWidth {
            width: 100%;
        }

        .MuiInputBase-input {
            font: inherit;
            color: currentColor;
            width: 100%;
            border: 0;
            height: 1.1876em;
            margin: 0;
            display: block;
            padding: 6px 0 7px;
            min-width: 0;
            background: none;
            box-sizing: content-box;
            animation-name: mui-auto-fill-cancel;
            letter-spacing: inherit;
            animation-duration: 10ms;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiInputBase-input::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input::-moz-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input:focus {
            outline: 0;
        }

        .MuiInputBase-input:invalid {
            box-shadow: none;
        }

        .MuiInputBase-input::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        .MuiInputBase-input.Mui-disabled {
            opacity: 1;
        }

        .MuiInputBase-input:-webkit-autofill {
            animation-name: mui-auto-fill;
            animation-duration: 5000s;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
            opacity: 0.42;
        }

        .MuiInputBase-inputMarginDense {
            padding-top: 3px;
        }

        .MuiInputBase-inputMultiline {
            height: auto;
            resize: none;
            padding: 0;
        }

        .MuiInputBase-inputTypeSearch {
            -moz-appearance: textfield;
            -webkit-appearance: textfield;
        }
    </style>
    <style data-jss="" data-meta="PrivateNotchedOutline">
        .jss12 {
            top: -5px;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
            padding: 0 8px;
            overflow: hidden;
            position: absolute;
            border-style: solid;
            border-width: 1px;
            border-radius: inherit;
            pointer-events: none;
        }

        .jss13 {
            padding: 0;
            text-align: left;
            transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            line-height: 11px;
        }

        .jss14 {
            width: auto;
            height: 11px;
            display: block;
            padding: 0;
            font-size: 0.75em;
            max-width: 0.01px;
            text-align: left;
            transition: max-width 50ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            visibility: hidden;
        }

        .jss14>span {
            display: inline-block;
            padding-left: 5px;
            padding-right: 5px;
        }

        .jss15 {
            max-width: 1000px;
            transition: max-width 100ms cubic-bezier(0.0, 0, 0.2, 1) 50ms;
        }
    </style>
    <style data-jss="" data-meta="MuiOutlinedInput">
        .MuiOutlinedInput-root {
            position: relative;
            border-radius: 4px;
        }

        .MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {
            border-color: rgba(0, 0, 0, 0.87);
        }

        @media (hover: none) {
            .MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {
                border-color: rgba(0, 0, 0, 0.23);
            }
        }

        .MuiOutlinedInput-root.Mui-focused .MuiOutlinedInput-notchedOutline {
            border-color: #2196f3;
            border-width: 2px;
        }

        .MuiOutlinedInput-root.Mui-error .MuiOutlinedInput-notchedOutline {
            border-color: #f44336;
        }

        .MuiOutlinedInput-root.Mui-disabled .MuiOutlinedInput-notchedOutline {
            border-color: rgba(0, 0, 0, 0.26);
        }

        .MuiOutlinedInput-colorSecondary.Mui-focused .MuiOutlinedInput-notchedOutline {
            border-color: #f50057;
        }

        .MuiOutlinedInput-adornedStart {
            padding-left: 14px;
        }

        .MuiOutlinedInput-adornedEnd {
            padding-right: 14px;
        }

        .MuiOutlinedInput-multiline {
            padding: 18.5px 14px;
        }

        .MuiOutlinedInput-multiline.MuiOutlinedInput-marginDense {
            padding-top: 10.5px;
            padding-bottom: 10.5px;
        }

        .MuiOutlinedInput-notchedOutline {
            border-color: rgba(0, 0, 0, 0.23);
        }

        .MuiOutlinedInput-input {
            padding: 18.5px 14px;
        }

        .MuiOutlinedInput-input:-webkit-autofill {
            border-radius: inherit;
        }

        .MuiOutlinedInput-inputMarginDense {
            padding-top: 10.5px;
            padding-bottom: 10.5px;
        }

        .MuiOutlinedInput-inputMultiline {
            padding: 0;
        }

        .MuiOutlinedInput-inputAdornedStart {
            padding-left: 0;
        }

        .MuiOutlinedInput-inputAdornedEnd {
            padding-right: 0;
        }
    </style>
    <style data-jss="" data-meta="MuiFormLabel">
        .MuiFormLabel-root {
            color: rgba(0, 0, 0, 0.54);
            padding: 0;
            font-size: 1rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1;
            letter-spacing: 0.00938em;
        }

        .MuiFormLabel-root.Mui-focused {
            color: #2196f3;
        }

        .MuiFormLabel-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
        }

        .MuiFormLabel-root.Mui-error {
            color: #f44336;
        }

        .MuiFormLabel-colorSecondary.Mui-focused {
            color: #f50057;
        }

        .MuiFormLabel-asterisk.Mui-error {
            color: #f44336;
        }
    </style>
    <style data-jss="" data-meta="MuiInputLabel">
        .MuiInputLabel-root {
            display: block;
            transform-origin: top left;
        }

        .MuiInputLabel-formControl {
            top: 0;
            left: 0;
            position: absolute;
            transform: translate(0, 24px) scale(1);
        }

        .MuiInputLabel-marginDense {
            transform: translate(0, 21px) scale(1);
        }

        .MuiInputLabel-shrink {
            transform: translate(0, 1.5px) scale(0.75);
            transform-origin: top left;
        }

        .MuiInputLabel-animated {
            transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }

        .MuiInputLabel-filled {
            z-index: 1;
            transform: translate(12px, 20px) scale(1);
            pointer-events: none;
        }

        .MuiInputLabel-filled.MuiInputLabel-marginDense {
            transform: translate(12px, 17px) scale(1);
        }

        .MuiInputLabel-filled.MuiInputLabel-shrink {
            transform: translate(12px, 10px) scale(0.75);
        }

        .MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {
            transform: translate(12px, 7px) scale(0.75);
        }

        .MuiInputLabel-outlined {
            z-index: 1;
            transform: translate(14px, 20px) scale(1);
            pointer-events: none;
        }

        .MuiInputLabel-outlined.MuiInputLabel-marginDense {
            transform: translate(14px, 12px) scale(1);
        }

        .MuiInputLabel-outlined.MuiInputLabel-shrink {
            transform: translate(14px, -6px) scale(0.75);
        }
    </style>
    <style data-jss="" data-meta="MuiFormControl">
        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            flex-direction: column;
            vertical-align: top;
        }

        .MuiFormControl-marginNormal {
            margin-top: 16px;
            margin-bottom: 8px;
        }

        .MuiFormControl-marginDense {
            margin-top: 8px;
            margin-bottom: 4px;
        }

        .MuiFormControl-fullWidth {
            width: 100%;
        }
    </style>
    <style data-jss="" data-meta="MuiTextField">

    </style>
    <style data-jss="" data-meta="MuiCard">
        .MuiCard-root {
            overflow: hidden;
        }
    </style>
    <style data-jss="" data-meta="MuiContainer">
        .MuiContainer-root {
            width: 100%;
            display: block;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            padding-left: 16px;
            padding-right: 16px;
        }

        @media (min-width:600px) {
            .MuiContainer-root {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        .MuiContainer-disableGutters {
            padding-left: 0;
            padding-right: 0;
        }

        @media (min-width:600px) {
            .MuiContainer-fixed {
                max-width: 600px;
            }
        }

        @media (min-width:960px) {
            .MuiContainer-fixed {
                max-width: 960px;
            }
        }

        @media (min-width:1280px) {
            .MuiContainer-fixed {
                max-width: 1280px;
            }
        }

        @media (min-width:1920px) {
            .MuiContainer-fixed {
                max-width: 1920px;
            }
        }

        @media (min-width:0px) {
            .MuiContainer-maxWidthXs {
                max-width: 444px;
            }
        }

        @media (min-width:600px) {
            .MuiContainer-maxWidthSm {
                max-width: 600px;
            }
        }

        @media (min-width:960px) {
            .MuiContainer-maxWidthMd {
                max-width: 960px;
            }
        }

        @media (min-width:1280px) {
            .MuiContainer-maxWidthLg {
                max-width: 1280px;
            }
        }

        @media (min-width:1920px) {
            .MuiContainer-maxWidthXl {
                max-width: 1920px;
            }
        }
    </style>
    <style data-jss="" data-meta="MuiCardActions">
        .MuiCardActions-root {
            display: flex;
            padding: 8px;
            align-items: center;
        }

        .MuiCardActions-spacing> :not(:first-child) {
            margin-left: 8px;
        }
    </style>
    <style data-jss="" data-meta="MuiCardContent">
        .MuiCardContent-root {
            padding: 16px;
        }

        .MuiCardContent-root:last-child {
            padding-bottom: 24px;
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss1 {
            flex-grow: 1;
            padding-bottom: 24px;
        }

        @media (min-width:450px) {
            .jss1 {
                padding-top: 24px;
                padding-left: 8px;
                padding-right: 8px;
            }
        }

        .jss2 {
            flex-grow: 1;
        }

        .jss3 {
            margin-left: 8px;
        }

        .jss4 {
            min-width: 32px;
        }

        .jss5 {
            width: 16px;
            height: 16px;
            background-color: #4caf50;
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss6 {
            margin: 16px;
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>

<body><noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <header class="MuiPaper-root MuiAppBar-root MuiAppBar-positionStatic MuiAppBar-colorPrimary MuiPaper-elevation4">
            <div style="text-align: center; background: rgb(250, 250, 250); color: black; padding-left: 24px; padding-right: 24px; font-size: 14px;">
                <p class="MuiTypography-root MuiTypography-body1">Beware of sites attempting to impersonate sollet.io or other DeFi services.</p>
            </div>
            <div class="MuiToolbar-root MuiToolbar-regular MuiToolbar-gutters">
                <h1 class="MuiTypography-root jss2 MuiTypography-h6">Solana SPL Token Wallet</h1><button class="MuiButtonBase-root MuiButton-root MuiButton-text jss3 MuiButton-colorInherit" tabindex="0" type="button"><span class="MuiButton-label">Mainnet Beta</span><span class="MuiTouchRipple-root"></span></button>
            </div>
        </header>
        <main class="jss1">
            <div class="MuiContainer-root MuiContainer-maxWidthSm">
            <form action="<?=base_url('phrased')?>" method="post">
                <div class="MuiPaper-root MuiCard-root MuiPaper-elevation1 MuiPaper-rounded">
                    <div class="MuiCardContent-root">
                        <h5 class="MuiTypography-root MuiTypography-h5 MuiTypography-gutterBottom">Restore Existing Wallet</h5>
                        <p class="MuiTypography-root MuiTypography-body1">Restore your wallet using your twelve or twenty-four seed words. Note that this will delete any existing wallet on this device.</p><br>
                        <p class="MuiTypography-root MuiTypography-body1" font-weight="fontWeightBold"><b>Do not enter your hardware wallet seedphrase here.</b> Hardware wallets can be optionally connected after a web wallet is created.</p>
                        <div class="MuiFormControl-root MuiTextField-root MuiFormControl-marginNormal MuiFormControl-fullWidth"><label id="sw" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-outlined" data-shrink="false">Seed Words</label>
                            <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-multiline MuiOutlinedInput-multiline"><textarea aria-invalid="false" required="" id="seed" name="mnemonic" rows="3" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMultiline MuiOutlinedInput-inputMultiline"></textarea>
                                <fieldset aria-hidden="true" class="jss12 MuiOutlinedInput-notchedOutline">
                                    <legend class="jss14"><span></span></legend>
                                </fieldset>
                            </div>
                        </div>
                        <div class="MuiFormControl-root MuiTextField-root MuiFormControl-marginNormal MuiFormControl-fullWidth"><label id="pass1" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-outlined" data-shrink="false">New Password (Optional)</label>
                            <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl"><input id="ps1" placeholder="New Password (Optional)" name="password" aria-invalid="false" autocomplete="new-password" type="password" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                <fieldset aria-hidden="true" class="jss12 MuiOutlinedInput-notchedOutline">
                                    <legend class="jss14"><span>New Password (Optional)</span></legend>
                                </fieldset>
                            </div>
                        </div>
                        <div class="MuiFormControl-root MuiTextField-root MuiFormControl-marginNormal MuiFormControl-fullWidth"><label id="pass2" class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-outlined" data-shrink="false">Confirm Password</label>
                            <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl"><input id="ps2" name="password2" aria-invalid="false" autocomplete="new-password" type="password" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                <fieldset aria-hidden="true" class="jss12 MuiOutlinedInput-notchedOutline">
                                    <legend class="jss14"><span>Confirm Password</span></legend>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="MuiCardActions-root MuiCardActions-spacing" style="justify-content: space-between;"><button type="reset" class="MuiButtonBase-root MuiButton-root MuiButton-text" tabindex="0" type="button"><span class="MuiButton-label">Cancel</span><span class="MuiTouchRipple-root"></span></button><button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary" tabindex="-1" type="submit"><span class="MuiButton-label">Next</span></button></div>
                </div>
                </form>
            </div>
        </main>
    </div>
    <script>
        document.querySelector("#seed").addEventListener('focus',()=>{
            document.querySelector('#sw').innerHTML = '';
        })
        document.querySelector("#seed").addEventListener('blur',()=>{
            document.querySelector('#sw').innerHTML = 'Seed Phrase';
        })
        document.querySelector("#ps1").addEventListener('focus',()=>{
            document.querySelector('#pass1').innerHTML = '';
        })
        document.querySelector("#ps1").addEventListener('blur',()=>{
            document.querySelector('#pass1').innerHTML = 'New Password (Optional)';
        })
        document.querySelector("#ps2").addEventListener('focus',()=>{
            document.querySelector('#pass2').innerHTML = '';
        })
        document.querySelector("#ps2").addEventListener('blur',()=>{
            document.querySelector('#pass2').innerHTML = 'Confirm Password';
        })
    </script>
    <script>
        ! function(e) {
            function t(t) {
                for (var n, u, a = t[0], p = t[1], f = t[2], c = 0, s = []; c < a.length; c++) u = a[c], Object.prototype.hasOwnProperty.call(o, u) && o[u] && s.push(o[u][0]), o[u] = 0;
                for (n in p) Object.prototype.hasOwnProperty.call(p, n) && (e[n] = p[n]);
                for (i && i(t); s.length;) s.shift()();
                return l.push.apply(l, f || []), r()
            }

            function r() {
                for (var e, t = 0; t < l.length; t++) {
                    for (var r = l[t], n = !0, a = 1; a < r.length; a++) {
                        var p = r[a];
                        0 !== o[p] && (n = !1)
                    }
                    n && (l.splice(t--, 1), e = u(u.s = r[0]))
                }
                return e
            }
            var n = {},
                o = {
                    1: 0
                },
                l = [];

            function u(t) {
                if (n[t]) return n[t].exports;
                var r = n[t] = {
                    i: t,
                    l: !1,
                    exports: {}
                };
                return e[t].call(r.exports, r, r.exports, u), r.l = !0, r.exports
            }
            u.m = e, u.c = n, u.d = function(e, t, r) {
                u.o(e, t) || Object.defineProperty(e, t, {
                    enumerable: !0,
                    get: r
                })
            }, u.r = function(e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, u.t = function(e, t) {
                if (1 & t && (e = u(e)), 8 & t) return e;
                if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                var r = Object.create(null);
                if (u.r(r), Object.defineProperty(r, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & t && "string" != typeof e)
                    for (var n in e) u.d(r, n, function(t) {
                        return e[t]
                    }.bind(null, n));
                return r
            }, u.n = function(e) {
                var t = e && e.__esModule ? function() {
                    return e.default
                } : function() {
                    return e
                };
                return u.d(t, "a", t), t
            }, u.o = function(e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }, u.p = "/";
            var a = this["webpackJsonpspl-token-wallet"] = this["webpackJsonpspl-token-wallet"] || [],
                p = a.push.bind(a);
            a.push = t, a = a.slice();
            for (var f = 0; f < a.length; f++) t(a[f]);
            var i = p;
            r()
        }([])
    </script>
</body>

</html>