const CDN = 'https://clivewalkden.sirv.com';
const PROFILE = 'personal';

export function sirvImage(
  src: string,
  width?: number | null,
  height?: number | null,
  settings: Record<string, string | boolean> = {}
): string {
  const urlArgs: Record<string, string> = { profile: PROFILE };
  const attrs: Record<string, string> = {};

  const { resize, 'data-options': dataOptions, ...rest } = settings;

  if (resize) {
    if (width) urlArgs.w = String(width);
    if (height) urlArgs.h = String(height);
  }

  // Build sorted query string
  const sortedUrlArgs = Object.fromEntries(Object.entries(urlArgs).sort(([a], [b]) => a.localeCompare(b)));
  const query = new URLSearchParams(sortedUrlArgs as Record<string, string>).toString();
  const fullSrc = `${CDN}${src}?${query}`;

  attrs.src = fullSrc;
  if (width) attrs.width = String(width);
  if (height) attrs.height = String(height);

  // Merge remaining settings as attributes
  for (const [k, v] of Object.entries(rest)) {
    attrs[k] = String(v);
  }

  // Sort attrs alphabetically (matching PHP Arr::sort behaviour)
  const sortedAttrs = Object.entries(attrs).sort(([a], [b]) => a.localeCompare(b));
  const attrStr = sortedAttrs
    .map(([k, v]) => `${k}="${v.replace(/"/g, '&quot;')}"`)
    .join(' ');

  return `<img ${attrStr}/>`;
}
