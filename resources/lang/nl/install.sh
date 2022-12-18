# Removes previous language
rm -rf resources/lang/nl

# Clone to the appropriate folder
git clone --depth=1 --quiet --branch=master https://github.com/musa11971/laravel-nl resources/lang/nl

# Remove all unnecessary files
rm resources/lang/nl/LICENSE
rm resources/lang/nl/README.md
rm resources/lang/nl/install.sh
rm resources/lang/nl/.gitignore
rm -rf resources/lang/nl/.git

# Sucess message
echo -e "\n\t\033[1;32mmusa11971/laravel-nl\033[0m has been installed." && echo -e "\thttps://github.com/musa11971/laravel-nl\n"