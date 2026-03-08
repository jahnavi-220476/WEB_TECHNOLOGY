 # _git configuration commands_
### Command Name:
git config --global user.name

### Syntax:
git config --global user.name "Your Name"

### Purpose:
Sets the global username that will be attached to all your Git commits.

### Example:
git config --global user.name "jahnavi-220476"

## Command Name:
git config --global user.email

### Syntax:
git config --global user.email "your@email.com"

### Purpose:
Sets the global email address associated with your Git commits

### Example:
git config --global user.email "n220476@rguktn.ac.in"




## Command Name:
git config --list

### Syntax:
git config --list 

### Purpose:
Display all teh git configuration currently applied

### Example:
git config --list 


## Command Name:
git config --unset 

### Syntax:
git config --unset  user.name

### Purpose:
Removes a specific Git configuration setting.

### Example:
git config --unset user.name


# _Repository setup commands_

## Command Name:
git init

### Syntax:
git init

### Purpose:
Initializes a new Git repository in the current directory. 
It creates a hidden .git folder to start tracking changes.


### Example:
git init

### Command:
git clone 

### syntax:
git clone <repository-url>

### Purpose:
Creates a copy of an existing remote repository to your local system.

### Example:
git clone https://github.com/jahnavi-220476/WEB_TECHNOLOGY




### Command name:
git clone --branch

### Syntax:
git clone --branch <branch-name><repository-url>

### Purpose
Clones a specific branch from a remote repository instead of the default branch

### Example:
git clone --branch main https://github.com/jahnavi-220476/WEB_TECHNOLOGIES




### Command name:
git clone --depth

### Syntax:
git clone --depth <number> <repository-url>

### Purpose:

Clones a repository with limited commit history (shallow clone). 
It improves speed by downloading fewer commits.

### Example:
git clone -- depth 1 https://github.com/jahnavi-220476/WEB_TECHNOLOGY

![PROJECT_SCREENSHOT](Screenshot 2026-03-02 221316.png)

# _repository status and inspection_

### Command name:
git status

### Syntax:
git status

### Purpose:
Displays the current state of the working directory and staging area.
Shows modified, staged, and untracked files.

### Example:
git status

![PROJECT_SCREENSHOT](Screenshot 2026-03-02 214331.png)
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 214929.png)

## Command Name:
git log

### Syntax:
git log

### Purpose:
Displays the complete commit history of the repository.

### Example:
git log


## Command Name:
git log

### Syntax:
git log

### Purpose:
Displays the complete commit history of the repository.

### Example:
git log


## Command Name:
git log --graph
 
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 215343.png)
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 215540.png)

### Syntax:
git log --graph --oneline --all

### Purpose:
Displays commit history with a graphical branch structure.

### Example:
git log --graph --oneline --all
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 215641.png)

## Command Name:
git show

### Syntax:
git show <commit-id>

### Purpose:
Shows detailed information about a specific commit.

### Example:
git show   483ddf5fff141270990a96386145b24b611ac484

![PROJECT_SCREENSHOT](Screenshot 2026-03-02 221316.png)
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 221346.png)

## Command Name:
git diff

### Syntax:
git diff

### Purpose:
Shows differences between modified files and the last commit.

### Example:
git diff
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 221518.png)
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 221539.png)

## Command Name:
git diff --staged

### Syntax:
git diff --staged

### Purpose:
Shows differences between staged changes and the last commit.

### Example:
git diff --staged
![PROJECT_SCREENSHOT]()

## Command Name:
git blame

### Syntax:
git blame <file-name>

### Purpose:
Displays line-by-line author information for a file.

### Example:
git blame labs.html

![PROJECT_SCREENSHOT](sCREENSHOT 2026-03-03 222905.png)

## Command Name:
git reflog

### Syntax:
git reflog

### Purpose:
Shows a history of all HEAD changes and branch movements.

### Example:
git reflog
![PROJECT_SCREENSHOT](Screenshot 2026-03-02 223208.png)

## Command Name:
git shortlog

### Syntax:
git shortlog

### Purpose:
Displays a summary of commits grouped by author.

### Example:
git shortlog



# _File tracking commands_

## Command Name:
git add

### Syntax:
git add 

### Purpose:
Adds a specific file to the staging area so it can be committed.

### Example:
git add git_industry_commands.md

![PROJECT_SCREENSHOT](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 162044.png)

## Command Name:
git add .

### Syntax:
git add .

### Purpose:
Adds all modified and new files in the current directory to the staging area.

### Example:
git add .



## Command Name:
git add -p 

### Syntax:
git add -p

### Purpose:
Allows staging changes interactively by selcting specific parts of a file.

### Example:
git add -p
![SCREENSHOT](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 204408.png)
![SCREENSHOT](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 204818.png)


## Command Name:
git rm

### Syntax:
git rm <file-name>

### Purpose:
Deletes a file from the working directory and stages the deletion for commit.

### Example:
git rm oldfile.txt


## Command Name:
git mv

### Syntax:
git mv <old-name> <new-name>

### Purpose:
Renames or moves a file and stages the change automatically.

### Example:
git mv labs.html labsss.html
![SCREENSHOT](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 210129.png)
![BEFORE_CHANGING](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 210400.png)
![AFTER_CHANGING](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 210220.png)

# _Commit commands_

## Command Name:
git commit

### Syntax:
git commit

### Purpose:
Creates a new commit with the staged changes. 
It opens the default editor to write the commit message.

### Example:
git commit


## Command Name:
git commit -m

### Syntax:
git commit -m "commit message"

### Purpose:
Creates a new commit with a message written directly in the command line.

### Example:
git commit -m "worked on git commands"

![PROJECT_SCREENSHOT]()


## Command Name:
git commit --amend

### Syntax:
git commit --amend

### Purpose:
Modifies the most recent commit. 
It can change the commit message or add staged changes to the last commit.

### Example:
git commit --amend


## Command Name:
git commit --no-edit

### Syntax:
git commit --amend --no-edit

### Purpose:
Amends the previous commit without changing its commit message.

### Example:
git commit --amend --no-edit



# _Branch management commands_

## Command Name
git branch

## Syntax
git branch

## Purpose
Lists all the branches in the current Git repository and highlights the active branch.

## Example
git branch

 


## Command Name
git branch <branch-name>

## Syntax
git branch branch_name

## Purpose
Creates a new branch in the repository.

## Example
git branch feature


## Command Name
git checkout <branch-name>

## Syntax
git checkout branch_name

## Purpose
Switches from the current branch to another branch.

## Example
git checkout feature


## Command Name
git checkout -b <branch-name>

## Syntax
git checkout -b branch_name

## Purpose
Creates a new branch and immediately switches to it.

## Example
git checkout -b feature2

![SCREENSHOT](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 215433.png)

## Command Name
git branch -d <branch-name>

## Syntax
git branch -d branch_name

## Purpose
Deletes a branch from the local repository.

## Example
git branch -d feature2
![SCREENSHOT](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 215719.png)

## Command Name
git branch -m <old-name> <new-name>

## Syntax
git branch -m old_branch new_branch

## Purpose
Renames an existing branch.

## Example
git branch -m feature feature1
![SCREENSHOT]()

## Command Name
git merge <branch-name>

## Syntax
git merge branch_name

## Purpose
Merges changes from one branch into the current branch.

## Example
git merge feature1



## Command Name
git push origin <branch-name>

## Syntax
git push origin branch_name

## Purpose
Pushes a specific branch to the remote repository.

## Example
git push origin feature1



## Command Name
git branch -a

## Syntax
git branch -a

## Purpose
Displays all local and remote branches.

## Example
git branch -a


## Command Name
git branch -r

## Syntax
git branch -r

## Purpose
Shows only remote branches.

## Example
git branch -r
![SCREENSHOT](C:\xamppp\htdocs\php_royalrest\Screenshots\Screenshot 2026-03-08 221049.png)