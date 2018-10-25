#!/bin/bash

git pull origin master

echo -n "Push message: "
read message

git add .
git commit -m "$message"
git push origin master