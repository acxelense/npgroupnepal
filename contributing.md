# Contributing to npgroupnepal


## Clone project locally

1. Set up Git (Windows, Mac & Linux).
2. Go to the npgroupnepal repo.
3. Clone your npgroupnepal repo `git clone git@github.com:acxelense/npgroupnepal.git`.
4. Checkout new feature branch `git checkout -b aa-branch-name` (Note: Use first character of your first and last name as branch prefix).
5. Start making changes and add files to staging `git add --all`
6. Commit the files, please note below example:

```
git commit -m "Update Contributing file" -m "Update contributing.md so as to understand the workflow for contributing to npgroupnepal repo" -m "Changes: --------" -m "Test: ---------" -m "Trello: https://trello.com/c/25dKMBm2/7-update-contributingmd-to-have-easy-understanding-of-vcs"
```
7. Push your feature branch `git push origin aa-branch-name`.
8. Visit [npgroupnepal](https://github.com/acxelense/npgroupnepal) repo and create pull request.


The other developers will now be alerted about the change and at least one of the team will respond. If your change fails to meet the guidelines it will be bounced, or feedback will be provided to help you improve it.

Once the developer handling your pull request is happy with it then your PR will be approved for merge.

### Keeping your branch up-to-date

Unlike systems like Subversion, Git can have multiple remotes. A remote is the name for a URL of a Git repository. By default your fork will have a remote named "origin" which points to your fork, but you can add another remote named "codeigniter" which points to `git://github.com/bcit-ci/CodeIgniter.git`. This is a read-only remote but you can pull from this develop branch to update your own.

If you are using command-line you can do the following:

1. `git remote add codeigniter git://github.com/bcit-ci/CodeIgniter.git`
2. `git pull codeigniter develop`
3. `git push origin develop`

Now your fork is up to date. This should be done regularly, or before you send a pull request at least.
