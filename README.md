# Git

## Overview

Git is a distributed version control system that tracks changes in your code. It allows multiple developers to collaborate efficiently.

## Key Concepts

### Repository

A folder containing your project files and Git history.

### Commit

A snapshot of your changes with a message describing what was modified.

### Branch

An independent line of development. The default branch is usually `main` or `master`.

### Remote

A version of your repository hosted on a server (e.g., GitHub, GitLab).

## Common Commands

```bash
git init                    # Initialize a new repository
git clone <url>            # Clone an existing repository
git add <file>             # Stage changes for commit
git commit -m "message"    # Commit staged changes
git push                   # Upload commits to remote
git pull                   # Download changes from remote
git branch                 # List or create branches
git checkout <branch>      # Switch to a different branch
git merge <branch>         # Merge another branch into current
git status                 # Check repository status
```

## Workflow

1. Make changes to your files
2. Stage changes with `git add`
3. Commit with `git commit`
4. Push to remote with `git push`
