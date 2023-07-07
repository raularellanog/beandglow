{ pkgs }: {
	deps = [
		pkgs.percona-server
  pkgs.php80
        pkgs.php80Packages.composer
	];
}