<?php
/**
 * Plugin Name: USAVEME Developer Portal
 * Description: Responsive developer resource hub for USAVEME and $USAVE.
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Text Domain: usaveme-developers
 */
if (!defined('ABSPATH')) { exit; }
if (!function_exists('usaveme_developers_render')) {
function usaveme_developers_render() {
    $resources = array(
        array('Getting started','Learn how to navigate developer resources.','docs/getting-started.md','book-open'),
        array('Solana token','Verification, mint details and read-only integration.','docs/token-integration.md','coins'),
        array('API roadmap','Proposed interfaces and release criteria.','docs/api-roadmap.md','code'),
        array('Security','Wallet safety, privacy and child protection.','docs/security.md','shield'),
        array('Deployment','Install the portal on your WordPress website.','docs/deployment.md','rocket'),
        array('Contributing','Suggest improvements through GitHub.','CONTRIBUTING.md','git')
    );
    ob_start();
    ?>
    <section class="usmdev" aria-label="USAVEME developer resources">
      <div class="usmdev-hero">
        <div class="usmdev-eyebrow">USAVEME / $USAVE &nbsp; • &nbsp; DEVELOPER RESOURCES</div>
        <h1>Build with purpose.<br><span>Develop with confidence.</span></h1>
        <p>Explore developer documentation, Solana token integration guidance, security standards, and the future USAVEME API ecosystem.</p>
        <div class="usmdev-actions">
          <a class="usmdev-primary" href="#usmdev-resources">Explore documentation <span aria-hidden="true">→</span></a>
          <a class="usmdev-secondary" href="https://github.com/usaveme/usaveme-developers" target="_blank" rel="noopener noreferrer">View on GitHub ↗</a>
        </div>
        <div class="usmdev-status"><span class="usmdev-dot"></span> Documentation available <span class="usmdev-sep">·</span> Public APIs planned</div>
      </div>
      <div class="usmdev-main" id="usmdev-resources">
        <div class="usmdev-heading"><div><div class="usmdev-kicker">DOCUMENTATION</div><h2>Developer resources</h2></div><p>Technical guides and project references</p></div>
        <div class="usmdev-grid">
        <?php foreach ($resources as $resource): ?>
          <a class="usmdev-card" href="<?php echo esc_url('https://github.com/usaveme/usaveme-developers/blob/main/'.$resource[2]); ?>" target="_blank" rel="noopener noreferrer">
            <span class="usmdev-card-icon" aria-hidden="true"><?php echo esc_html(strtoupper(substr($resource[3],0,1))); ?></span>
            <strong><?php echo esc_html($resource[0]); ?></strong>
            <span><?php echo esc_html($resource[1]); ?></span>
            <small>Read guide <span aria-hidden="true">↗</span></small>
          </a>
        <?php endforeach; ?>
        </div>
        <div class="usmdev-note"><strong>Integration status</strong><p>Documentation is available in GitHub. Public API endpoints, SDKs, developer credentials, and live on-chain dashboards are not yet provided by this plugin. Verify all blockchain addresses independently before transacting.</p></div>
        <div class="usmdev-bottom"><div><h2>Technology for a meaningful mission.</h2><p>USAVEME aims to connect sponsors directly with children in need. The $USAVE token is intended to support platform development and operations; purchasing tokens is not a donation or direct sponsorship.</p></div><a href="https://usaveme.com">Explore USAVEME ↗</a></div>
      </div>
    </section>
    <style>
      .usmdev{--usmnavy:#07162d;--usmblue:#236cff;--usmmuted:#60718a;font-family:inherit;color:#12223b;line-height:1.55;max-width:1200px;margin:0 auto;overflow:hidden;border-radius:22px;background:#f6f8fc}
      .usmdev *{box-sizing:border-box}.usmdev a{text-decoration:none}.usmdev-hero{padding:clamp(36px,7vw,90px) clamp(22px,6vw,76px);background:radial-gradient(circle at 90% 15%,#17437b 0%,transparent 40%),linear-gradient(135deg,#07162d,#0b2347);color:#fff}
      .usmdev-eyebrow,.usmdev-kicker{font-size:12px;letter-spacing:2px;font-weight:750;color:#83b6ff}.usmdev-hero h1{font-size:clamp(35px,5.4vw,66px);line-height:1.12;letter-spacing:-1.8px;margin:22px 0;max-width:850px;color:#fff;font-weight:800}.usmdev-hero h1 span{color:#80b2ff}.usmdev-hero p{font-size:clamp(16px,1.8vw,19px);color:#c4d1e5;max-width:690px;margin:0 0 30px}
      .usmdev-actions{display:flex;gap:12px;flex-wrap:wrap}.usmdev-actions a{display:inline-flex;align-items:center;gap:12px;border-radius:9px;padding:13px 20px;font-weight:700;font-size:14px}.usmdev-primary{background:#397bff;color:#fff!important}.usmdev-secondary{border:1px solid #61758f;color:#fff!important}.usmdev-actions a:focus-visible,.usmdev-card:focus-visible,.usmdev-bottom a:focus-visible{outline:3px solid #ffcf65;outline-offset:3px}
      .usmdev-status{margin-top:36px;color:#b7c8e0;font-size:13px;display:flex;align-items:center;gap:9px;flex-wrap:wrap}.usmdev-dot{width:8px;height:8px;background:#60e4a2;border-radius:50%;display:inline-block}.usmdev-sep{color:#7087a7}
      .usmdev-main{padding:clamp(26px,5vw,60px)}.usmdev-heading{display:flex;justify-content:space-between;align-items:end;gap:16px;margin-bottom:24px}.usmdev-heading h2{font-size:clamp(25px,3vw,33px);margin:5px 0 0;color:#0e213f}.usmdev-heading p{color:var(--usmmuted);font-size:14px;margin:0}.usmdev-kicker{color:#2464c5}
      .usmdev-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}.usmdev-card{background:#fff;border:1px solid #e1e7f0;border-radius:14px;padding:25px;display:flex;flex-direction:column;min-height:222px;box-shadow:0 5px 18px rgba(19,43,80,.035);transition:transform .15s,border-color .15s}.usmdev-card:hover{transform:translateY(-3px);border-color:#91b5ff}.usmdev-card-icon{display:grid;place-items:center;width:42px;height:42px;border-radius:11px;background:#eaf1ff;color:#2469e8;font-size:18px;font-weight:800;margin-bottom:18px}.usmdev-card strong{font-size:18px;color:#132c50}.usmdev-card>span:not(.usmdev-card-icon){font-size:14px;color:#5b6e87;margin-top:7px;flex:1}.usmdev-card small{color:#2469e8;font-weight:750;margin-top:20px}
      .usmdev-note{background:#eaf1ff;border:1px solid #d5e4ff;padding:21px 25px;border-radius:12px;margin-top:25px}.usmdev-note strong{color:#163e78}.usmdev-note p{margin:6px 0 0;color:#425b7d;font-size:14px}.usmdev-bottom{display:flex;justify-content:space-between;align-items:center;gap:22px;border-top:1px solid #dfe5ee;margin-top:42px;padding-top:32px}.usmdev-bottom h2{font-size:23px;margin:0 0 9px}.usmdev-bottom p{font-size:14px;color:#52657e;max-width:730px;margin:0}.usmdev-bottom a{white-space:nowrap;color:#236cff;font-weight:750}
      @media(max-width:820px){.usmdev-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.usmdev-bottom{align-items:flex-start;flex-direction:column}}@media(max-width:540px){.usmdev-grid{grid-template-columns:1fr}.usmdev-heading{display:block}.usmdev-heading p{margin-top:8px}.usmdev-card{min-height:180px}.usmdev-hero h1{letter-spacing:-.8px}}
    </style>
    <?php
    return ob_get_clean();
}
add_shortcode('usaveme_developers','usaveme_developers_render');
}
