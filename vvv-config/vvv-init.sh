echo "Commence It is known..."

# Make a database, if we don't already have one
echo "Creating database (if it's not already there)"
mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS isk"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON isk* TO wp@localhost IDENTIFIED BY 'wp';"


# Run Composer
echo "Building stack with composer."
composer install --prefer-dist

echo "Installing WP"
wp core install --url=isk.dev --title="It is known" --admin_user=admin --admin_password=password --admin_email=demo@example.com

echo "Activate Plugins"
wp plugin activate pods
wp plugin activate pods-frontier-auto-template
wp plugin activate pods-frontier
wp plugin activate pods-ajax-views
wp plugin activate pods-alternative-cache
wp plugin activate log-deprecated-notices
wp plugin activate debug-bar
wp plugin activate debug-bar-console
wp plugin activate simply-show-ids
