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
5. Pull latest changes with `git pull`

## Additional Commands

### Commit History

```bash
git log                     # View commit history
git log --oneline           # Compact commit history view
git log --graph --all       # Visual branch history
```

### Branch Management

````bash
git branch -a               # List all branches
git branch <name>           # Create new branch
git push origin <branch>    # Push branch to remote
git pull origin <branch>    # Pull branch from remote
git checkout <branch>       # Switch to branch
git switch <branch>         # Switch to branch (newer syntax)
### Undoing Changes

```bash
git restore <file>          # Discard changes in working directory
git reset HEAD <file>       # Unstage file
git revert <commit>         # Create new commit that undoes changes
git reset --hard <commit>   # Reset to specific commit (destructive)
```bash
git branch -d <branch>      # Delete branch locally
git branch -D <branch>      # Force delete branch locally
git push origin --delete <branch>  # Delete branch on remote
```
###git file Delete
1. Enter the Folder
2. cd <Folder>
```bash
git rm <File Name With Extensions>
```

### Stashing Changes


```bash
git stash                   # Temporarily save changes
git stash pop               # Apply most recent stash
git stash list              # View all stashes
```
````
