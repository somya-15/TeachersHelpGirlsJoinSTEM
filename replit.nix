{ pkgs }: {
  deps = [
    pkgs.php74
    pkgs.php80Packages.composer
    pkgs.nodePackages.vscode-langservers-extracted
    pkgs.nodePackages.typescript-language-server
  ];
}