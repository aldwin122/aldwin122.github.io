<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($page_title ?? 'Login') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/app.css') ?>" rel="stylesheet">
</head>
<body class="auth-page">
    <div class="auth-card">
        <h1>SCS Portal</h1>
        <p class="subtitle">Silang Central School · Smart Grade Portal</p>

        <?php if (! empty($flash_error)): ?>
            <div class="alert alert-danger"><?= esc($flash_error) ?></div>
        <?php endif; ?>
        <?php if (! empty($flash_success)): ?>
            <div class="alert alert-success"><?= esc($flash_success) ?></div>
        <?php endif; ?>

        <form method="post" action="<?= site_url('login/authenticate') ?>">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control form-control-lg" required autofocus placeholder="admin / teacher1 / parent1">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn btn-scs btn-lg w-100 mb-3">Sign In</button>
        </form>

        <div class="d-flex justify-content-between small">
            <a href="<?= site_url('login/forgot') ?>">Forgot password?</a>
            <span class="text-muted">Demo: password123</span>
        </div>
    </div>
</body>
</html>
