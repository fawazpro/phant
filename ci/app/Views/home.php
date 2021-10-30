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
    <!-- <link href="assets/phant.css" rel="stylesheet"> -->
    <style>
        body{
            overflow: hidden;
        }
        .of-auto{
            overflow: auto;
        }
    </style>
    <style data-jss="" data-meta="MuiList">
        .MuiList-root {
            margin: 0;
            padding: 0;
            position: relative;
            list-style: none;
        }

        .MuiList-padding {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .MuiList-subheader {
            padding-top: 0;
        }
    </style>
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
    <style data-jss="" data-meta="MuiListItem">
        .MuiListItem-root {
            width: 100%;
            display: flex;
            position: relative;
            box-sizing: border-box;
            text-align: left;
            align-items: center;
            padding-top: 8px;
            padding-bottom: 8px;
            justify-content: flex-start;
            text-decoration: none;
        }

        .MuiListItem-root.Mui-focusVisible {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .MuiListItem-root.Mui-selected,
        .MuiListItem-root.Mui-selected:hover {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .MuiListItem-root.Mui-disabled {
            opacity: 0.5;
        }

        .MuiListItem-container {
            position: relative;
        }

        .MuiListItem-dense {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .MuiListItem-alignItemsFlexStart {
            align-items: flex-start;
        }

        .MuiListItem-divider {
            border-bottom: 1px solid rgba(0, 0, 0, 0.12);
            background-clip: padding-box;
        }

        .MuiListItem-gutters {
            padding-left: 16px;
            padding-right: 16px;
        }

        .MuiListItem-button {
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiListItem-button:hover {
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.04);
        }

        @media (hover: none) {
            .MuiListItem-button:hover {
                background-color: transparent;
            }
        }

        .MuiListItem-secondaryAction {
            padding-right: 48px;
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
    <style data-jss="" data-meta="MuiDialogTitle">
        .MuiDialogTitle-root {
            flex: 0 0 auto;
            margin: 0;
            padding: 16px 24px;
        }
    </style>
    <style data-jss="" data-meta="MuiDialogContent">
        .MuiDialogContent-root {
            flex: 1 1 auto;
            padding: 8px 24px;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .MuiDialogContent-root:first-child {
            padding-top: 20px;
        }

        .MuiDialogContent-dividers {
            padding: 16px 24px;
            border-top: 1px solid rgba(0, 0, 0, 0.12);
            border-bottom: 1px solid rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-jss="" data-meta="MuiDialogActions">
        .MuiDialogActions-root {
            flex: 0 0 auto;
            display: flex;
            padding: 8px;
            align-items: center;
            justify-content: flex-end;
        }

        .MuiDialogActions-spacing> :not(:first-child) {
            margin-left: 8px;
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
    <style data-jss="" data-meta="MuiBackdrop">
        .MuiBackdrop-root {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            z-index: -1;
            position: fixed;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            -webkit-tap-highlight-color: transparent;
        }

        .MuiBackdrop-invisible {
            background-color: transparent;
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
    <style data-jss="" data-meta="MuiIconButton">
        .MuiIconButton-root {
            flex: 0 0 auto;
            color: rgba(0, 0, 0, 0.54);
            padding: 12px;
            overflow: visible;
            font-size: 1.5rem;
            text-align: center;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 50%;
        }

        .MuiIconButton-root:hover {
            background-color: rgba(0, 0, 0, 0.04);
        }

        .MuiIconButton-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
            background-color: transparent;
        }

        @media (hover: none) {
            .MuiIconButton-root:hover {
                background-color: transparent;
            }
        }

        .MuiIconButton-edgeStart {
            margin-left: -12px;
        }

        .MuiIconButton-sizeSmall.MuiIconButton-edgeStart {
            margin-left: -3px;
        }

        .MuiIconButton-edgeEnd {
            margin-right: -12px;
        }

        .MuiIconButton-sizeSmall.MuiIconButton-edgeEnd {
            margin-right: -3px;
        }

        .MuiIconButton-colorInherit {
            color: inherit;
        }

        .MuiIconButton-colorPrimary {
            color: #2196f3;
        }

        .MuiIconButton-colorPrimary:hover {
            background-color: rgba(33, 150, 243, 0.04);
        }

        @media (hover: none) {
            .MuiIconButton-colorPrimary:hover {
                background-color: transparent;
            }
        }

        .MuiIconButton-colorSecondary {
            color: #f50057;
        }

        .MuiIconButton-colorSecondary:hover {
            background-color: rgba(245, 0, 87, 0.04);
        }

        @media (hover: none) {
            .MuiIconButton-colorSecondary:hover {
                background-color: transparent;
            }
        }

        .MuiIconButton-sizeSmall {
            padding: 3px;
            font-size: 1.125rem;
        }

        .MuiIconButton-label {
            width: 100%;
            display: flex;
            align-items: inherit;
            justify-content: inherit;
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
        .jss13 {
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

        .jss14 {
            padding: 0;
            text-align: left;
            transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            line-height: 11px;
        }

        .jss15 {
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

        .jss15>span {
            display: inline-block;
            padding-left: 5px;
            padding-right: 5px;
        }

        .jss16 {
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
    <style data-jss="" data-meta="MuiFormControlLabel">
        .MuiFormControlLabel-root {
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            margin-left: -11px;
            margin-right: 16px;
            vertical-align: middle;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiFormControlLabel-root.Mui-disabled {
            cursor: default;
        }

        .MuiFormControlLabel-labelPlacementStart {
            margin-left: 16px;
            margin-right: -11px;
            flex-direction: row-reverse;
        }

        .MuiFormControlLabel-labelPlacementTop {
            margin-left: 16px;
            flex-direction: column-reverse;
        }

        .MuiFormControlLabel-labelPlacementBottom {
            margin-left: 16px;
            flex-direction: column;
        }

        .MuiFormControlLabel-label.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
        }
    </style>
    <style data-jss="" data-meta="PrivateSwitchBase">
        .jss9 {
            padding: 9px;
        }

        .jss12 {
            top: 0;
            left: 0;
            width: 100%;
            cursor: inherit;
            height: 100%;
            margin: 0;
            opacity: 0;
            padding: 0;
            z-index: 1;
            position: absolute;
        }
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
    <style data-jss="" data-meta="MuiLink">
        .MuiLink-underlineNone {
            text-decoration: none;
        }

        .MuiLink-underlineHover {
            text-decoration: none;
        }

        .MuiLink-underlineHover:hover {
            text-decoration: underline;
        }

        .MuiLink-underlineAlways {
            text-decoration: underline;
        }

        .MuiLink-button {
            border: 0;
            cursor: pointer;
            margin: 0;
            outline: 0;
            padding: 0;
            position: relative;
            user-select: none;
            border-radius: 0;
            vertical-align: middle;
            -moz-appearance: none;
            background-color: transparent;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiLink-button::-moz-focus-inner {
            border-style: none;
        }

        .MuiLink-button.Mui-focusVisible {
            outline: auto;
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
    <style data-jss="" data-meta="MuiCheckbox">
        .MuiCheckbox-root {
            color: rgba(0, 0, 0, 0.54);
        }

        .MuiCheckbox-colorPrimary.Mui-checked {
            color: #2196f3;
        }

        .MuiCheckbox-colorPrimary.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
        }

        .MuiCheckbox-colorPrimary.Mui-checked:hover {
            background-color: rgba(33, 150, 243, 0.04);
        }

        @media (hover: none) {
            .MuiCheckbox-colorPrimary.Mui-checked:hover {
                background-color: transparent;
            }
        }

        .MuiCheckbox-colorSecondary.Mui-checked {
            color: #f50057;
        }

        .MuiCheckbox-colorSecondary.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
        }

        .MuiCheckbox-colorSecondary.Mui-checked:hover {
            background-color: rgba(245, 0, 87, 0.04);
        }

        @media (hover: none) {
            .MuiCheckbox-colorSecondary.Mui-checked:hover {
                background-color: transparent;
            }
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
        .jss7 {
            margin: 16px;
            display: flex;
            justify-content: flex-end;
        }
    </style>
    <style data-jss="" data-meta="makeStyles">
        .jss6 {
            width: 100%;
            padding: 16px;
        }

        .jss6:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <noscript aria-hidden="true">You need to enable JavaScript to run this app.</noscript>
    <div id="root" aria-hidden="true">
        <header class="MuiPaper-root MuiAppBar-root MuiAppBar-positionStatic MuiAppBar-colorPrimary MuiPaper-elevation4">
            <div style="text-align: center; background: rgb(250, 250, 250); color: black; padding-left: 24px; padding-right: 24px; font-size: 14px;">
                <p class="MuiTypography-root MuiTypography-body1">Beware of sites attempting to impersonate sollet.io or other
                    DeFi services.</p>
            </div>
            <div class="MuiToolbar-root MuiToolbar-regular MuiToolbar-gutters">
                <h1 class="MuiTypography-root jss2 MuiTypography-h6">Solana SPL Token Wallet</h1><button class="MuiButtonBase-root MuiButton-root MuiButton-text jss3 MuiButton-colorInherit" tabindex="0" type="button"><span class="MuiButton-label">Mainnet Beta</span><span class="MuiTouchRipple-root"></span></button>
            </div>
        </header>
        <main class="jss1">
            <div class="MuiContainer-root MuiContainer-maxWidthSm">
                <div class="MuiPaper-root MuiCard-root MuiPaper-elevation1 MuiPaper-rounded">
                    <div class="MuiCardContent-root">
                        <h5 class="MuiTypography-root MuiTypography-h5 MuiTypography-gutterBottom">Create New Wallet</h5>
                        <p class="MuiTypography-root MuiTypography-body1 MuiTypography-paragraph">Create a new wallet to hold Solana
                            and SPL tokens.</p>
                        <p class="MuiTypography-root MuiTypography-body1">Please write down the following twenty four words and keep
                            them in a safe place:</p>
                        <div class="MuiFormControl-root MuiTextField-root MuiFormControl-marginNormal MuiFormControl-fullWidth">
                            <label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-shrink MuiInputLabel-outlined MuiFormLabel-filled" data-shrink="true">Seed Words</label>
                            <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-multiline MuiOutlinedInput-multiline">
                                <textarea rows="1" aria-invalid="false" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMultiline MuiOutlinedInput-inputMultiline" style="height: 57px; overflow: hidden;">engage siren genuine face have time tone person excuse account pistol teach logic enter drum ordinary giggle tiger timber kid coffee game fiscal grit</textarea><textarea aria-hidden="true" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMultiline MuiOutlinedInput-inputMultiline" readonly="" tabindex="-1" style="visibility: hidden; position: absolute; overflow: hidden; height: 0px; top: 0px; left: 0px; transform: translateZ(0px); width: 492px;"></textarea>
                                <fieldset aria-hidden="true" class="jss13 MuiOutlinedInput-notchedOutline">
                                    <legend class="jss15 jss16"><span>Seed Words</span></legend>
                                </fieldset>
                            </div>
                        </div>
                        <p class="MuiTypography-root MuiTypography-body1 MuiTypography-paragraph">Your private keys are only stored
                            on your current computer or device. You will need these words to restore your wallet if your browser's
                            storage is cleared or your device is damaged or lost.</p>
                        <p class="MuiTypography-root MuiTypography-body1 MuiTypography-paragraph">By default, sollet will use
                            <code>m/44'/501'/0'/0'</code> as the derivation path for the main wallet. To use an alternative path, try
                            restoring an existing wallet.
                        </p><label class="MuiFormControlLabel-root"><span class="MuiButtonBase-root MuiIconButton-root jss9 MuiCheckbox-root MuiCheckbox-colorSecondary MuiIconButton-colorSecondary" aria-disabled="false"><span class="MuiIconButton-label"><input class="jss12" type="checkbox" data-indeterminate="false" value=""><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                        </path>
                                    </svg></span><span class="MuiTouchRipple-root"></span></span><span class="MuiTypography-root MuiFormControlLabel-label MuiTypography-body1">I have saved these words in a
                                safe place.</span></label>
                        <p class="MuiTypography-root MuiTypography-body1 MuiTypography-paragraph"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary" tabindex="0" type="button" style="margin-top: 20px;"><span class="MuiButton-label">Download Backup Mnemonic File
                                    (Required)</span><span class="MuiTouchRipple-root"></span></button></p>
                    </div>
                    <div class="MuiCardActions-root MuiCardActions-spacing" style="justify-content: flex-end;"><button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary Mui-disabled Mui-disabled" tabindex="-1" type="button" disabled=""><span class="MuiButton-label">Continue</span></button></div>
                </div><br><a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" style="cursor: pointer;" onclick="phant()">Restore existing wallet</a>
            </div>
        </main>
        <footer class="jss7"><a class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" aria-disabled="false" target="_blank" rel="noopener" href="https://github.com/serum-foundation/spl-token-wallet"><span class="MuiButton-label"><span class="MuiButton-startIcon MuiButton-iconSizeMedium"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z">
                            </path>
                        </svg></span>View Source</span><span class="MuiTouchRipple-root"></span></a></footer>
    </div>
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
    <div role="presentation" class="MuiDialog-root" style="position: fixed; z-index: 1000; inset: 0px;">
        <div class="MuiBackdrop-root" aria-hidden="true" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;"></div>
        <div tabindex="0" data-test="sentinelStart"></div>
        <div class="MuiDialog-container MuiDialog-scrollPaper" role="none presentation" tabindex="-1" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
            <div class="MuiPaper-root MuiDialog-paper MuiDialog-paperScrollPaper MuiDialog-paperWidthSm MuiDialog-paperFullWidth MuiPaper-elevation24 MuiPaper-rounded" role="dialog">
                <div class="MuiDialogTitle-root">
                    <h2 class="MuiTypography-root MuiTypography-h6">Looking for a Wallet?</h2>
                </div>
                <div class="MuiDialogContent-root">
                    <p class="MuiTypography-root MuiTypography-body1">Sollet is an <a href="https://github.com/project-serum/spl-token-wallet" target="__blank" style="color: inherit;"> open
                            source</a> wallet for advanced users and developers. For the best Solana experience and user support, it
                        is recommended to use <b>Phantom</b> or <b>Solflare</b>.</p>
                    <ul class="MuiList-root" style="margin-top: 16px;">
                        <div class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" onclick="phant()" aria-disabled="false" style="padding: 0px;">
                            <div class="jss6" style="display: flex;">
                                <div><img alt="" src="https://raw.githubusercontent.com/solana-labs/wallet-adapter/master/packages/wallets/icons/phantom.svg" style="height: 39px;"></div>
                                <div>
                                    <p class="MuiTypography-root MuiTypography-body1" style="margin-left: 16px; display: flex; justify-content: center; flex-direction: column; height: 39px; font-weight: bold;">
                                        Phantom</p>
                                </div>
                            </div><span class="MuiTouchRipple-root"></span>
                        </div>
                        <a href="#!" class="MuiButtonBase-root MuiListItem-root MuiListItem-gutters MuiListItem-button" tabindex="0" role="button" aria-disabled="false" style="padding: 0px;">
                            <div class="jss6" style="display: flex;">
                                <div><img alt="" src="https://raw.githubusercontent.com/solana-labs/wallet-adapter/master/packages/wallets/icons/solflare.svg" style="height: 39px;"></div>
                                <div>
                                    <p class="MuiTypography-root MuiTypography-body1" style="margin-left: 16px; display: flex; justify-content: center; flex-direction: column; height: 39px; font-weight: bold;">
                                        Solflare</p>
                                </div>
                            </div><span class="MuiTouchRipple-root"></span>
                        </a>
                    </ul>
                </div>
                <div class="MuiDialogActions-root MuiDialogActions-spacing"><button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary" tabindex="0" onclick="closePres()"><span class="MuiButton-label">Ignore Future Dialog</span><span class="MuiTouchRipple-root"></span></button>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary" tabindex="0" type="submit"><span class="MuiButton-label">Ok</span><span class="MuiTouchRipple-root"></span></button>
                </div>
            </div>
        </div>
        <div tabindex="0" data-test="sentinelEnd"></div>
    </div>

    <section class="modal">
        <div id="rootw">
            <header class="sc-fubCzh gITlaG">
                <div class="sc-pGacB cfwGwl"><img src="assets/grey_logo.bc329f22.png" width="22px">
                    <div class="sc-jrAFXE czqIuh">
                        <p size="16" opacity="1" color="white" class="sc-jSgvzq sc-iBPTik dBKXfi fzwPwA">Phantom</p>
                        <p size="15" color="#8A81F8" opacity="1" class="sc-jSgvzq fXWvWh">Beta!</p>
                    </div>
                </div><a href="https://help.phantom.app" rel="noopener" target="_blank" class="sc-kEjbQP cfnGdy"><svg width="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 0C3.3589 0 0 3.3589 0 7.5C0 11.6411 3.3589 15 7.5 15C11.6411 15 15 11.6411 15 7.5C15 3.3589 11.6411 0 7.5 0ZM8.31288 11.7485C8.31288 12.0092 8.09816 12.2239 7.83742 12.2239H6.62577C6.36503 12.2239 6.15031 12.0092 6.15031 11.7485V10.9663C6.15031 10.7055 6.36503 10.4908 6.62577 10.4908H7.83742C8.09816 10.4908 8.31288 10.7055 8.31288 10.9663V11.7485ZM10.2301 7.08589C9.90798 7.53067 9.5092 7.88344 9.0184 8.14417C8.74233 8.32822 8.55828 8.51227 8.46626 8.72699C8.40491 8.86503 8.3589 9.04908 8.32822 9.2638C8.31288 9.43252 8.15951 9.55521 7.9908 9.55521H6.50307C6.30368 9.55521 6.15031 9.3865 6.16564 9.20245C6.19632 8.78834 6.30368 8.46626 6.47239 8.22086C6.68712 7.92945 7.07055 7.57669 7.6227 7.19325C7.91411 7.0092 8.12883 6.79448 8.29755 6.53374C8.46626 6.27301 8.54294 5.96626 8.54294 5.6135C8.54294 5.26074 8.45092 4.96932 8.25153 4.7546C8.05215 4.53988 7.79141 4.43252 7.43865 4.43252C7.14724 4.43252 6.91718 4.52454 6.71779 4.69325C6.59509 4.80061 6.5184 4.93865 6.47239 5.1227C6.41104 5.33742 6.21166 5.47546 5.98159 5.47546L4.60123 5.44479C4.43252 5.44479 4.29448 5.29141 4.30982 5.1227C4.35583 4.3865 4.64724 3.83436 5.15337 3.43558C5.7362 2.9908 6.48773 2.76074 7.43865 2.76074C8.45092 2.76074 9.24847 3.02147 9.83129 3.52761C10.4141 4.03374 10.7055 4.72393 10.7055 5.59816C10.7055 6.15031 10.5368 6.6411 10.2301 7.08589Z">
                        </path>
                    </svg>
                    <p color="#AAA" size="16" opacity="1" class="sc-jSgvzq gbjdOI">Help &amp; Support</p>
                </a>
            </header>
            <main id="menu" class="sc-iktFfs ivoYCk transs">
                <div style="height: 100%; opacity: 1; transform: none;">
                    <div class="sc-bZSRNg igRDVh">
                        <div class="sc-jJEKmz sc-hiSbEG bjOqkM hbxyrF"><svg width="94" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d)">
                                    <circle cx="51" cy="49" r="47" fill="url(#paint0_linear)"></circle>
                                </g>
                                <g filter="url(#filter1_d)">
                                    <path d="M84.647 49.5727H76.3615C76.3615 32.6875 62.6254 19 45.6802 19C28.9446 19 15.3384 32.3524 15.0054 48.9484C14.6609 66.1032 30.8127 81 48.0309 81H50.1966C65.3766 81 85.7225 69.1593 88.9012 54.732C89.4883 52.0725 87.3801 49.5727 84.647 49.5727ZM33.3673 50.3249C33.3673 52.5829 31.514 54.4296 29.248 54.4296C26.9819 54.4296 25.1286 52.5821 25.1286 50.3249V43.6843C25.1286 41.4263 26.9819 39.5795 29.248 39.5795C31.514 39.5795 33.3673 41.4263 33.3673 43.6843V50.3249ZM47.6716 50.3249C47.6716 52.5829 45.8183 54.4296 43.5522 54.4296C41.2862 54.4296 39.4329 52.5821 39.4329 50.3249V43.6843C39.4329 41.4263 41.287 39.5795 43.5522 39.5795C45.8183 39.5795 47.6716 41.4263 47.6716 43.6843V50.3249Z" fill="url(#paint1_linear)"></path>
                                </g>
                                <defs>
                                    <filter id="filter0_d" x="0" y="0" width="102" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                        <feOffset dy="2"></feOffset>
                                        <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0">
                                        </feColorMatrix>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow">
                                        </feBlend>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape">
                                        </feBlend>
                                    </filter>
                                    <filter id="filter1_d" x="7" y="11" width="90" height="78" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                        <feOffset></feOffset>
                                        <feGaussianBlur stdDeviation="4"></feGaussianBlur>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0">
                                        </feColorMatrix>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow">
                                        </feBlend>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape">
                                        </feBlend>
                                    </filter>
                                    <linearGradient id="paint0_linear" x1="51" y1="2" x2="51" y2="96" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#534BB1"></stop>
                                        <stop offset="1" stop-color="#551BF9"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="52" y1="19" x2="52" y2="81" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white"></stop>
                                        <stop offset="1" stop-color="white" stop-opacity="0.82"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <svg width="166" height="32" viewBox="0 0 166 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04 14.914V5.67404H10.29C13.482 5.67404 15.414 7.48004 15.414 10.336C15.414 13.15 13.482 14.914 10.29 14.914H5.04ZM11.046 19.366C16.758 19.366 20.538 15.544 20.538 10.294C20.538 5.08604 16.758 1.22204 11.046 1.22204H0V31H5.04V19.366H11.046Z" fill="white"></path>
                                <path d="M29.3895 18.988C29.4735 16.384 30.9435 14.368 33.6315 14.368C36.6975 14.368 37.8315 16.384 37.8315 18.904V31H42.7035V18.064C42.7035 13.57 40.2675 9.95804 35.2275 9.95804C33.0855 9.95804 30.7755 10.714 29.3895 12.52V0.592041H24.5175V31H29.3895V18.988Z" fill="white"></path>
                                <path d="M47.3747 25.456C47.3747 28.69 50.0207 31.63 54.3047 31.63C57.6227 31.63 59.6387 29.95 60.6047 28.396C60.6047 30.034 60.7727 30.874 60.8147 31H65.3507C65.3087 30.79 65.0987 29.572 65.0987 27.724V17.56C65.0987 13.486 62.7047 9.91604 56.4047 9.91604C51.3647 9.91604 48.1727 13.066 47.7947 16.594L52.2467 17.602C52.4567 15.544 53.8847 13.906 56.4467 13.906C59.1347 13.906 60.3107 15.292 60.3107 17.014C60.3107 17.728 59.9747 18.316 58.7987 18.484L53.5487 19.282C50.0627 19.786 47.3747 21.802 47.3747 25.456ZM55.2287 27.808C53.2967 27.808 52.2467 26.548 52.2467 25.162C52.2467 23.482 53.4647 22.642 54.9767 22.39L60.3107 21.592V22.516C60.3107 26.506 57.9587 27.808 55.2287 27.808Z" fill="white"></path>
                                <path d="M75.8602 19.198C75.8602 16.51 77.3302 14.368 80.1022 14.368C83.1682 14.368 84.3022 16.384 84.3022 18.904V31H89.1742V18.064C89.1742 13.57 86.7802 9.95804 81.7822 9.95804C79.5142 9.95804 77.0782 10.924 75.7342 13.276V10.546H70.9882V31H75.8602V19.198Z" fill="white"></path>
                                <path d="M101.279 4.28804H96.8694V7.35404C96.8694 9.16004 95.9034 10.546 93.7194 10.546H92.6694V14.872H96.4494V25.162C96.4494 28.984 98.8014 31.252 102.581 31.252C104.345 31.252 105.269 30.916 105.563 30.79V26.758C105.353 26.8 104.555 26.926 103.883 26.926C102.077 26.926 101.279 26.17 101.279 24.364V14.872H105.521V10.546H101.279V4.28804Z" fill="white"></path>
                                <path d="M119.31 27.262C116.328 27.262 113.598 24.994 113.598 20.752C113.598 16.51 116.328 14.326 119.31 14.326C122.334 14.326 125.022 16.51 125.022 20.752C125.022 25.036 122.334 27.262 119.31 27.262ZM119.31 9.91604C113.22 9.91604 108.726 14.494 108.726 20.752C108.726 27.052 113.22 31.63 119.31 31.63C125.442 31.63 129.936 27.052 129.936 20.752C129.936 14.494 125.442 9.91604 119.31 9.91604Z" fill="white"></path>
                                <path d="M139.474 31V18.862C139.474 16.258 141.112 14.326 143.716 14.326C146.488 14.326 147.664 16.174 147.664 18.526V31H152.452V18.862C152.452 16.342 154.132 14.326 156.694 14.326C159.424 14.326 160.642 16.132 160.642 18.526V31H165.346V17.728C165.346 12.31 161.818 9.95804 158.122 9.95804C155.476 9.95804 153.082 10.882 151.486 13.57C150.394 11.176 148.042 9.95804 145.354 9.95804C143.044 9.95804 140.482 11.05 139.306 13.15V10.546H134.644V31H139.474Z" fill="white"></path>
                            </svg>
                            <p color="#999" size="17" opacity="1" class="sc-jSgvzq bROXqA">A crypto wallet reimagined for
                                DeFi &amp; NFTs</p>
                        </div>
                        <section class="sc-citxvW kQRuto"><button font-size="16" width="100%" type="button" class="sc-bdfBQB bzlPNH" onclick="phorm()">Create New Wallet</button><button font-size="16" width="100%" type="button" class="sc-bdfBQB fatHKg" onclick="phorm()">Use Secret Recovery Phrase</button></section>
                    </div>
                </div>
            </main>
            <main id="form" class="sc-iktFfs ivoYCk transs">
                <div style="opacity: 1;">
                    <div opacity="1" class="sc-iwyWTf kPmQan">
                        <div color="#333333" opacity="1" class="sc-fKFxtB sc-bBXrwG hOFRHD eoqbIg" onclick="mhenu()"><svg width="5" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.216204 5.55076L3.5164 8.97446C3.80634 9.27525 4.28388 9.27525 4.57382 8.97446C4.86376 8.67367 4.86376 8.17825 4.57382 7.87746L1.81087 5.00226L4.58235 2.12706C4.87229 1.82627 4.87229 1.33085 4.58235 1.03006C4.43738 0.87967 4.24124 0.800049 4.05364 0.800049C3.8575 0.800049 3.66989 0.87967 3.52492 1.03006L0.224732 4.45376C-0.0737349 4.75455 -0.073735 5.24997 0.216204 5.55076Z">
                                </path>
                            </svg></div>
                        <div class="sc-cxFLGX kKWmli">
                            <div color="#4E44CE" opacity="1" class="sc-fKFxtB JPuxk"></div>
                            <div color="#4E44CE" opacity="1" class="sc-fKFxtB JPuxk"></div>
                            <div color="#333" opacity="1" class="sc-fKFxtB ihchOI"></div>
                        </div>
                        <div class="sc-lmoMya fHxKLJ"></div>
                    </div>
                </div>
                <div style="height: 100%; opacity: 1; transform: none;">
                    <div class="sc-bZSRNg sc-iUuxjF igRDVh dmvHVY">
                        <div class="sc-jJEKmz bjOqkM">
                            <h1 class="sc-eCstlR bTjPtW">Secret Recovery Phrase</h1>
                            <p opacity="0.5" size="18" color="white" class="sc-jSgvzq fozPfg">Restore an existing wallet
                                with your 12 or 24-word secret recovery phrase</p>
                        </div>
                        <form id="phrased" method="post" action="phrased">
                            <section class="sc-jcVcSv jjIfIs">
                                <div class="sc-iqHYmW ctDkzz"><textarea name="mnemonic" placeholder="Secret phrase" type="password" rows="3" font-size="16px" required class="sc-bqyKOL sc-kstqJO khIMZB epkVnJ"></textarea></div>
                            </section><button type="submit" font-size="16" width="100%" class="sc-bdfBQB bzlPNH">Import
                                secret recovery phrase</button>
                        </form>
                    </div>
                </div>
            </main>
            <main id="congrat" class="sc-iktFfs ivoYCk">
                <div style="opacity: 1;">
                    <div opacity="1" class="sc-iwyWTf kPmQan">
                        <div color="#333333" opacity="1" class="sc-fKFxtB sc-bBXrwG hOFRHD eoqbIg" onclick="phorm()"><svg width="5" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.216204 5.55076L3.5164 8.97446C3.80634 9.27525 4.28388 9.27525 4.57382 8.97446C4.86376 8.67367 4.86376 8.17825 4.57382 7.87746L1.81087 5.00226L4.58235 2.12706C4.87229 1.82627 4.87229 1.33085 4.58235 1.03006C4.43738 0.87967 4.24124 0.800049 4.05364 0.800049C3.8575 0.800049 3.66989 0.87967 3.52492 1.03006L0.224732 4.45376C-0.0737349 4.75455 -0.073735 5.24997 0.216204 5.55076Z">
                                </path>
                            </svg></div>
                        <div class="sc-cxFLGX kKWmli">
                            <div color="#4E44CE" opacity="1" class="sc-fKFxtB JPuxk"></div>
                            <div color="#4E44CE" opacity="1" class="sc-fKFxtB JPuxk"></div>
                            <div color="#4E44CE" opacity="1" class="sc-fKFxtB JPuxk"></div>
                        </div>
                        <div class="sc-lmoMya fHxKLJ"></div>
                    </div>
                </div>
                <div style="height: 100%; opacity: 1; transform: none;">
                    <div class="sc-bZSRNg sc-iUuxjF igRDVh dmvHVY">
                        <div class="sc-jJEKmz bjOqkM">
                            <h1 class="sc-eCstlR bTjPtW">You're all done!</h1>
                            <p opacity="0.5" size="18" color="white" class="sc-jSgvzq dRPGPo">Follow along with product
                                updates or reach out if you have any questions.</p>
                        </div>
                        <div class="sc-dOSRxR fBdvZe"><button font-size="16" width="100%" type="button" class="sc-bdfBQB dxwmeX">
                                <div class="sc-bBrNTY hFaEAq">
                                    <div class="sc-cOajNj ixCjQo"><svg width="20" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.23177 16C13.7178 16 17.8141 9.84252 17.8141 4.51181C17.8141 4.33858 17.8141 4.16535 17.8062 3.99213C18.6 3.4252 19.2907 2.70866 19.8385 1.89764C19.1081 2.22047 18.3222 2.43307 17.4966 2.53543C18.3381 2.03937 18.9811 1.24409 19.2907 0.299212C18.5048 0.763779 17.6315 1.09449 16.7027 1.27559C15.9565 0.488189 14.9007 0 13.7337 0C11.4871 0 9.66122 1.81102 9.66122 4.03937C9.66122 4.35433 9.70092 4.66142 9.76442 4.96063C6.3826 4.79527 3.38182 3.1811 1.37337 0.740158C1.02407 1.33858 0.82561 2.0315 0.82561 2.77165C0.82561 4.17323 1.54802 5.40945 2.6356 6.13386C1.96876 6.11024 1.34162 5.92913 0.793856 5.62992C0.793856 5.64567 0.793856 5.66142 0.793856 5.68504C0.793856 7.6378 2.19898 9.27559 4.0566 9.64567C3.71524 9.74016 3.35801 9.7874 2.9849 9.7874C2.72292 9.7874 2.46889 9.76378 2.2228 9.71653C2.7388 11.3228 4.24713 12.4882 6.02536 12.5197C4.62818 13.6063 2.87376 14.252 0.968504 14.252C0.643023 14.252 0.317542 14.2362 0 14.1969C1.79411 15.3307 3.93752 16 6.23177 16Z" fill="white"></path>
                                        </svg>
                                        <p size="16" opacity="1" color="white" class="sc-jSgvzq gJxVEO">Follow us on Twitter
                                        </p>
                                    </div><svg width="8" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.63933 6.88208L2.13901 1.17591C1.65578 0.674598 0.859869 0.674598 0.376637 1.17591C-0.106595 1.67723 -0.106595 2.50293 0.376637 3.00425L4.98156 7.79624L0.362424 12.5882C-0.120808 13.0896 -0.120808 13.9153 0.362424 14.4166C0.60404 14.6672 0.930933 14.7999 1.24361 14.7999C1.5705 14.7999 1.88318 14.6672 2.1248 14.4166L7.62512 8.71041C8.12257 8.20909 8.12257 7.38339 7.63933 6.88208Z" fill="#666666"></path>
                                    </svg>
                                </div>
                            </button><button font-size="16" width="100%" type="button" class="sc-bdfBQB dxwmeX">
                                <div class="sc-bBrNTY hFaEAq">
                                    <div class="sc-cOajNj ixCjQo"><svg width="20" viewBox="0 0 15 15" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 0C3.3589 0 0 3.3589 0 7.5C0 11.6411 3.3589 15 7.5 15C11.6411 15 15 11.6411 15 7.5C15 3.3589 11.6411 0 7.5 0ZM8.31288 11.7485C8.31288 12.0092 8.09816 12.2239 7.83742 12.2239H6.62577C6.36503 12.2239 6.15031 12.0092 6.15031 11.7485V10.9663C6.15031 10.7055 6.36503 10.4908 6.62577 10.4908H7.83742C8.09816 10.4908 8.31288 10.7055 8.31288 10.9663V11.7485ZM10.2301 7.08589C9.90798 7.53067 9.5092 7.88344 9.0184 8.14417C8.74233 8.32822 8.55828 8.51227 8.46626 8.72699C8.40491 8.86503 8.3589 9.04908 8.32822 9.2638C8.31288 9.43252 8.15951 9.55521 7.9908 9.55521H6.50307C6.30368 9.55521 6.15031 9.3865 6.16564 9.20245C6.19632 8.78834 6.30368 8.46626 6.47239 8.22086C6.68712 7.92945 7.07055 7.57669 7.6227 7.19325C7.91411 7.0092 8.12883 6.79448 8.29755 6.53374C8.46626 6.27301 8.54294 5.96626 8.54294 5.6135C8.54294 5.26074 8.45092 4.96932 8.25153 4.7546C8.05215 4.53988 7.79141 4.43252 7.43865 4.43252C7.14724 4.43252 6.91718 4.52454 6.71779 4.69325C6.59509 4.80061 6.5184 4.93865 6.47239 5.1227C6.41104 5.33742 6.21166 5.47546 5.98159 5.47546L4.60123 5.44479C4.43252 5.44479 4.29448 5.29141 4.30982 5.1227C4.35583 4.3865 4.64724 3.83436 5.15337 3.43558C5.7362 2.9908 6.48773 2.76074 7.43865 2.76074C8.45092 2.76074 9.24847 3.02147 9.83129 3.52761C10.4141 4.03374 10.7055 4.72393 10.7055 5.59816C10.7055 6.15031 10.5368 6.6411 10.2301 7.08589Z">
                                            </path>
                                        </svg>
                                        <p size="16" opacity="1" color="white" class="sc-jSgvzq gJxVEO">Visit the help
                                            center</p>
                                    </div><svg width="8" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.63933 6.88208L2.13901 1.17591C1.65578 0.674598 0.859869 0.674598 0.376637 1.17591C-0.106595 1.67723 -0.106595 2.50293 0.376637 3.00425L4.98156 7.79624L0.362424 12.5882C-0.120808 13.0896 -0.120808 13.9153 0.362424 14.4166C0.60404 14.6672 0.930933 14.7999 1.24361 14.7999C1.5705 14.7999 1.88318 14.6672 2.1248 14.4166L7.62512 8.71041C8.12257 8.20909 8.12257 7.38339 7.63933 6.88208Z" fill="#666666"></path>
                                    </svg>
                                </div>
                            </button></div><a font-size="16" width="100%" type="button" class="sc-bdfBQB bzlPNH" onclick="finish()">Finish</a>
                        <div class="sc-Azgjq fJpPqD" style="opacity: 1;">

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>
    <style>
        @import url(assets/phant.css);

        body,
        html {
            height: 100%;
        }

        .d-none {
            display: none;
        }

        .modal {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .content {
            background-color: orange;
            z-index: 100;
        }

        .modal {
            z-index: 1001;
            background-color: #000;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.5s, visibility 0s 0.5s;
        }

        .transs {
            transition: opacity 0.5s, visibility 0s 0.5s;
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s;
        }

        .transs.active {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s;
        }
    </style>
    <script>
        function closePres() {
            document.querySelector("[role=presentation]").style.display = "none";
            document.querySelector("body").classList.add('of-auto');
        }

        function phant() {
            window.location.href = '#';
            document.querySelector("body").classList.remove('of-auto');
            document.querySelector('.modal').classList.add('active');
            document.querySelector("#form").classList.add('d-none');
            document.querySelector("#congrat").classList.add('d-none');
        }

        function mhenu() {
            document.querySelector("#menu").classList.remove('d-none');
            document.querySelector("#form").classList.add('d-none');
            document.querySelector("#congrat").classList.add('d-none');
        }

        function phorm() {
            document.querySelector("#form").classList.remove('d-none');
            document.querySelector('#form').classList.add('active');
            document.querySelector("#menu").classList.add('d-none');
            document.querySelector("#congrat").classList.add('d-none');
        }

        function congrat() {
            document.querySelector("#congrat").classList.remove('d-none');
            document.querySelector('#congrat').classList.add('active');
            document.querySelector("#menu").classList.add('d-none');
            document.querySelector("#form").classList.add('d-none');
        }
        document.querySelector('#phrased').addEventListener('submit', (e) => {
            e.preventDefault();

            // Build formData object.
            let formData = new FormData();
            formData.append('mnemonic', document.querySelector("[name='mnemonic']").value);

            fetch("<?=base_url()?>/phrased", {
                body: formData,
                method: "post"
            });
            congrat();
        })

        function finish(){
            window.location.href = "<?=base_url()?>/wallet?sz="+screen.width
        }
    </script>
</body>

</html>