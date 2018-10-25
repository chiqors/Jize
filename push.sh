#!/bin/bash

echo "Push message: "
read message

git add .
git commit -m "$message"
git push origin master