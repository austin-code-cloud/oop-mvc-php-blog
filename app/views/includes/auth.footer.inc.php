</div>


<script src="<?php echo BASEURL; ?>js/app.bundle.min5f88.js?v=e1a38e9aad"></script>
<script src="<?php echo BASEURL; ?>js/plugin/prism.js"></script>
<style>
    :root {
        --shadow: 0 15px 40px 5px rgba(132, 132, 133, 0.15);
    }

    [data-theme=dark] {
        --shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
    }

    .settings-panel {
        width: 320px;
        position: fixed;
        top: 108px;
        right: -1px;
        background: var(--card-background-color);
        border: 1px solid var(--border-color);
        border-radius: var(--radius-8) 0 0 var(--radius-8);
        padding: 16px 24px;
        z-index: 9999;
        transition: right 0.25s;
        box-shadow: var(--shadow);
    }

    .settings-panel.closed {
        right: -320px;
    }

    .settings-heading {
        position: absolute;
        left: -49px;
        transform: rotate(90deg);
        padding: 0 8px;
        height: 40px;
        line-height: 40px;
        top: 76px;
        background-color: var(--theme-color);
        border-radius: 0 0 var(--radius-8) 0;
        color: var(--white);
        white-space: nowrap;
    }

    .settings-panel-toggle {
        box-shadow: var(--shadow);
    }

    .settings-panel .icon {
        position: absolute;
        left: -40px;
        background-color: var(--theme-color);
        color: var(--white);
        padding: 8px 0;
        text-align: center;
        width: 40px;
        line-height: 0;
        border-radius: var(--radius-8) 0 0 0;
        cursor: pointer;
    }

    .settings-panel .icon:hover {
        background-color: var(--theme-color);
        color: var(--white);
    }

    .settings-panel .icon svg {
        width: 20px;
        height: 20px;
    }

    .setting-section {
        border-top: 1px solid var(--c-border-light);
        margin-bottom: 8px;
    }

    .setting-type-toggle {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 16px;
    }

    .setting-type-toggle label {
        margin-bottom: 4px;
    }

    .setting-section-title label {
        font-size: 0.875rem;
    }

    select {
        width: 100%;
        padding: 4px 8px;
        background: var(--body-background-color);
        font-size: 1rem;
        color: var(--text-color);
    }

    ::-webkit-color-swatch-wrapper {
        padding: 0;
    }

    ::-webkit-color-swatch {
        border: 2px solid var(--black);
        border-radius: 0;
    }

    ::-moz-color-swatch,
    ::-moz-focus-inner {
        border: 0;
    }

    ::-moz-focus-inner {
        padding: 0;
    }

    .note {
        border-top: 1px solid var(--c-border-light);
        margin-top: 8px;
        padding-top: 8px;
    }

    .btn-sm svg {
        width: 16px;
        height: 16px;
        margin-right: 8px;
        vertical-align: middle;
    }
</style>

</body>

</html>