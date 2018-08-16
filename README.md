# Bookmarklet
A simple to use bookmarklet for saving all your favorite URL's to a MySQL database. Only tested with Safari and Chrome browsers

## Installation
Copy the files to your webserver. 

* Create a new MySQL database and import the schema you'll find in **database** directory : `table.sql`
* Update the `connect.php` file in the **include** directory, to reflect your database configuration
* Visit the `index.php` page, it will provide the necessary instructions to add the bookmarklet to your Favorites bar (Safari) or the Bookmarks bar (Chrome) depending on which browser you choose


The following screenshot illustrates the message displayed when visiting `index.php`:

![Screenshot](https://raw.githubusercontent.com/nrollr/Bookmarklet/screenshot/images/screenshot%402px.png)

Simply drag and drop the link using the icon in your Bookmarks bar. It will appear as `Bookmark!`

## Usage

* Visit a website you wish to save to your local database
* Click the `Bookmark!` link in your Bookmarks bar and you'll be redirected to the `load.php` page, which will display the `title` and `url` of the website you wish to add. Review and click Submit to add to the database.
* Upon success, you'll be redirected once more, this time to `bookmarks.php` which lists all bookmarks you've added to the database so far..

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details